<?php

namespace App\Http\Controllers\Web;

use Mail;
use Auth;
use Hash;
use Validator;
use App\Models\User;
use App\Models\Admin\Sale;
use Jenssegers\Agent\Agent;
use App\Models\Admin\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class CheckoutController extends Controller
{
    public function __construct()
    {
        //$this->middleware('guest');
    }

    public function index()
    {
        return view('web.cart.index');
    }

    private function postRequest($url, $postData, $token) {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPHEADER => array(
                'Authorization: '.$token,
                'Content-Type: application/json'
            ),
            CURLOPT_POSTFIELDS => $postData
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    private function generateToken()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => VISA_URL_SECURITY,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPHEADER => array(
            "Accept: */*",
            'Authorization: '.'Basic '.base64_encode(VISA_USER.":".VISA_PWD)
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    private function generateSesion($amount, $token)
    {
        $session = array(
            'amount' => $amount,
            'antifraud' => array(
                'clientIp' => $_SERVER['REMOTE_ADDR'],
                'merchantDefineData' => array(
                    'MDD4' => Auth::guard('user')->user()->email,
                    'MDD21' => '0',
                    'MDD32' => Auth::guard('user')->user()->email,
                    'MDD75' => 'Registrado',
                    'MDD77' => \Carbon\Carbon::parse(Auth::guard('user')->user()->created_at)->startOfDay()->diffInDays(\Carbon\Carbon::today()),
                ),
            ),
            'channel' => 'web',
        );
        $json = json_encode($session);
        $response = json_decode($this->postRequest(VISA_URL_SESSION, $json, $token));
        return $response->sessionKey;
    }

    private function generateAuthorization($amount, $purchaseNumber, $transactionToken, $token) {
        $data = array(
            'antifraud' => null,
            'captureType' => 'manual',
            'channel' => 'web',
            'countable' => true,
            'order' => array(
                'amount' => $amount,
                'currency' => 'PEN',
                'purchaseNumber' => $purchaseNumber,
                'tokenId' => $transactionToken
            ),
            'recurrence' => null,
            'sponsored' => null
        );
        $json = json_encode($data);
        $session = json_decode($this->postRequest(VISA_URL_AUTHORIZATION, $json, $token));
        return $session;
    }

    public function payment(Request $request)
    {
        $data = $request;
        $cart = session('cart');
        $data_invoice = [
            'invoice_name' => $request->invoice_name,
            'invoice_department' => $request->invoice_department,
            'invoice_district' => $request->invoice_district,
            'invoice_address' => $request->invoice_address,
            'invoice_telephone' => $request->invoice_telephone,
            'invoice_email' => $request->invoice_email,
        ];
        session()->put('invoice', $data_invoice);
        $total_price = 0;
        foreach($cart as $id => $details):
            $total_price += $details['price'];
        endforeach;
        $sale = Sale::orderBy('id', 'Desc')->first();
        if($sale):
            $purchaseNumber = date('Ym').zero_fill($sale->id + 1, 5);
        else:
            $purchaseNumber = date('Ym').zero_fill(1, 5);
        endif;
        if($data->mode == 1): //con tarjeta
            $token = $this->generateToken();
            $sesion = $this->generateSesion($total_price, $token);
            return view('web.cart.payment', compact('data', 'cart', 'purchaseNumber', 'token', 'sesion', 'total_price'));
        endif;
        if($data->mode == 2): //sin tarjeta
            $invoice = session('invoice');
            $data_sale = [
                'amount' => $total_price,
                'currency' => 'PEN',
                'purchase_number' => $purchaseNumber,
                'transaction_date' => \Carbon\Carbon::now(),
                'card' => 'Sin tarjeta',
                'brand' => 'Sin tarjeta',
                'status' => 'Pending',
                'detail' => session('cart'),
                'paid' => 0,
                'invoice_name' => $invoice['invoice_name'],
                'invoice_department' => $invoice['invoice_department'],
                'invoice_district' => $invoice['invoice_district'],
                'invoice_address' => $invoice['invoice_address'],
                'invoice_telephone' => $invoice['invoice_telephone'],
                'invoice_email' => $invoice['invoice_email'],
                'user_name' => Auth::guard('user')->user()->name,
                'user_lastname' => Auth::guard('user')->user()->lastname,
                'user_type_document' => Auth::guard('user')->user()->type_document,
                'user_document' => Auth::guard('user')->user()->document,
                'user_department' => Auth::guard('user')->user()->department,
                'user_district' => Auth::guard('user')->user()->district,
                'user_address' => Auth::guard('user')->user()->address,
                'user_email' => Auth::guard('user')->user()->email,
            ];
            $recorded = Sale::create($data_sale);
    
            $data_mail = $data_sale;
            $email = $invoice['invoice_email'];
            $data_mail['name_email'] = ucfirst(Auth::guard('user')->user()->name);
            Mail::send('web.emails.sale_confirmation_without', $data_mail, function($message) use ($email, $data_mail)
            {
                $message->to($email)->subject($data_mail['name_email'].', Gracias por tu compra');
            });
    
            session()->forget('cart');
            session()->forget('invoice');
            return view('web.cart.payment_without', compact('recorded'));
        endif;
        if($data->mode == 3): //transferencia
            $invoice = session('invoice');
            $data_sale = [
                'amount' => $total_price,
                'currency' => 'PEN',
                'purchase_number' => $purchaseNumber,
                'transaction_date' => \Carbon\Carbon::now(),
                'card' => 'Transferencia',
                'brand' => 'Transferencia',
                'status' => 'Pending',
                'detail' => session('cart'),
                'paid' => 0,
                'invoice_name' => $invoice['invoice_name'],
                'invoice_department' => $invoice['invoice_department'],
                'invoice_district' => $invoice['invoice_district'],
                'invoice_address' => $invoice['invoice_address'],
                'invoice_telephone' => $invoice['invoice_telephone'],
                'invoice_email' => $invoice['invoice_email'],
                'user_name' => Auth::guard('user')->user()->name,
                'user_lastname' => Auth::guard('user')->user()->lastname,
                'user_type_document' => Auth::guard('user')->user()->type_document,
                'user_document' => Auth::guard('user')->user()->document,
                'user_department' => Auth::guard('user')->user()->department,
                'user_district' => Auth::guard('user')->user()->district,
                'user_address' => Auth::guard('user')->user()->address,
                'user_email' => Auth::guard('user')->user()->email,
            ];
            $recorded = Sale::create($data_sale);
    
            $data_mail = $data_sale;
            $email = $invoice['invoice_email'];
            $data_mail['name_email'] = ucfirst(Auth::guard('user')->user()->name);
            Mail::send('web.emails.sale_confirmation_transfer', $data_mail, function($message) use ($email, $data_mail)
            {
                $message->to($email)->subject($data_mail['name_email'].', Gracias por tu compra');
            });
    
            session()->forget('cart');
            session()->forget('invoice');
            return view('web.cart.payment_transfer', compact('recorded'));
        endif;
    }

    public function confirmation(Request $request)
    {
        $token = $this->generateToken();
        $data = $this->generateAuthorization(request('amount'), request('purchaseNumber'), $request->transactionToken, $token);
        $invoice = session('invoice');
        $c = preg_split('//', $data->dataMap->TRANSACTION_DATE, -1, PREG_SPLIT_NO_EMPTY);
        $data_sale = [
            'amount' => $data->order->amount,
            'currency' => $data->order->currency,
            'purchase_number' => request('purchaseNumber'),
            'transaction_date' => date('Y-d-m H:i:s', strtotime($c[4].$c[5]."/".$c[2].$c[3]."/".$c[0].$c[1]." ".$c[6].$c[7].":".$c[8].$c[9].":".$c[10].$c[11])),
            'card' => $data->dataMap->CARD,
            'brand' => $data->dataMap->BRAND,
            'status' => $data->dataMap->STATUS,
            'detail' => session('cart'),
            'paid' => 1,
            'invoice_name' => $invoice['invoice_name'],
            'invoice_department' => $invoice['invoice_department'],
            'invoice_district' => $invoice['invoice_district'],
            'invoice_address' => $invoice['invoice_address'],
            'invoice_telephone' => $invoice['invoice_telephone'],
            'invoice_email' => $invoice['invoice_email'],
            'user_name' => Auth::guard('user')->user()->name,
            'user_lastname' => Auth::guard('user')->user()->lastname,
            'user_type_document' => Auth::guard('user')->user()->type_document,
            'user_document' => Auth::guard('user')->user()->document,
            'user_department' => Auth::guard('user')->user()->department,
            'user_district' => Auth::guard('user')->user()->district,
            'user_address' => Auth::guard('user')->user()->address,
            'user_email' => Auth::guard('user')->user()->email,
        ];
        $recorded = Sale::create($data_sale);

        $data_mail = $data_sale;
        $email = $invoice['invoice_email'];
        $data_mail['name_email'] = ucfirst(Auth::guard('user')->user()->name);
        Mail::send('web.emails.sale_confirmation', $data_mail, function($message) use ($email, $data_mail)
        {
            $message->to($email)->subject($data_mail['name_email'].', Gracias por tu compra');
        });

        session()->forget('cart');
        session()->forget('invoice');

        return view('web.cart.confirmation', compact('data', 'recorded'));
    }

    public function addToCart(Request $request)
    {
        $id = $request->id;
        $course = Course::find($id);
        
        if(!$course) {
            return response()->json(['success' => false]);
        }
        $total = 0;
        $cart = session()->get('cart');

        if(!$cart) {
            $cart = [
                    $id => [
                        "name" => $course->name,
                        "url" => route('curso', [$course->slug, $course->id]),
                        "url_category" => route('programas', [$course->course_category->course_area->slug]),
                        "slug" =>  $course->slug,
                        "image" =>  $course->badge,
                        "price" => $course->price,
                        "category" => $course->course_category->course_area->name,
                    ]
            ];
            session()->put('cart', $cart);
            foreach ($cart as $id => $details) {
                $total += $details['price'];
            }
            return response()->json(['success' => true, 'product' => $cart[$id], 'cart' => $cart, 'total' => $total]);
        }

        if(isset($cart[$id])) {
            //$cart[$id]['quantity'] = $cart[$id]['quantity'] + $quantity_sent;
            session()->put('cart', $cart);
            foreach ($cart as $id => $details) {
                $total += $details['price'];
            }
            return response()->json(['success' => true, 'product' => $cart[$id], 'cart' => $cart, 'total' => $total]);
        }

        $cart[$id] = [
            "name" => $course->name,
            "url" => route('curso', [$course->slug, $course->id]),
            "url_category" => route('programas', [$course->course_category->course_area->slug]),
            "slug" =>  $course->slug,
            "image" =>  $course->badge,
            "price" => $course->price,
            "category" => $course->course_category->course_area->name,
        ];
        session()->put('cart', $cart);
        foreach ($cart as $id => $details) {
            $total += $details['price'];
        }
        return response()->json(['success' => true, 'product' => $cart[$id], 'cart' => $cart, 'total' => $total]);
    }

    public function removeFromCart(Request $request)
    {
        $total = 0;
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
                foreach ($cart as $id => $details) {
                    $total += $details['price'];
                }
                return response()->json(['success' => true, 'cart' => $cart, 'total' => $total]);
            }
            return response()->json(['success' => false]);
        }
    }

    public function updateCart(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            return response()->json(['success' => true]);
        }
    }
}
