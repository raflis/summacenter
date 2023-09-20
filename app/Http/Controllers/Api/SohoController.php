<?php

namespace App\Http\Controllers\Api;

use Http;
use Illuminate\Http\Request;
use App\Models\Admin\Setting;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class SohoController extends Controller
{
    public function authorization_code()
    {
        $response = Http::asForm()->post('https://accounts.zoho.com/oauth/v2/token', [
            'code' => '1000.47a00343dadcd940803d998e7bed426a.00d1018e528a7ebcb03c981f3a2a2ea2', //token de 10 min generado en la plataforma
            'redirect_url' => 'https://summacenterlatam.com',
            'client_id' => '1000.041UALJXMJNMY53P6XDU70OYDV8AFI',
            'client_secret' => '8829c06634ca1a4c9060169f4b9b270d7ab104ae78',
            'grant_type' => 'authorization_code',
        ]);

        //scope in Self Cliente = ZohoCRM.modules.ALL

        return $response->json(); //generamos token de 1 hora

        /*{
            "access_token":"1000.ca22a454deb3d9e83cde02f372098c88.bb699033964c8ea720956c07d4e30d36",
            "refresh_token":"1000.d80dd7c106318bdacf55cb376976f82a.e5d7a923c8d0e380c5f0902d3c443be6", //token que NUNCA caduca
            "api_domain":"https:\/\/www.zohoapis.com",
            "token_type":"Bearer",
            "expires_in":3600
        }*/
    }

    public function refresh_token()
    {
        $response = Http::asForm()->post('https://accounts.zoho.com/oauth/v2/token', [
            'refresh_token' => '1000.d80dd7c106318bdacf55cb376976f82a.e5d7a923c8d0e380c5f0902d3c443be6',
            'client_id' => '1000.041UALJXMJNMY53P6XDU70OYDV8AFI',
            'client_secret' => '8829c06634ca1a4c9060169f4b9b270d7ab104ae78',
            'grant_type' => 'refresh_token',
        ]);

        $response = $response->json(); //generamos token de trabajo
        //return $response; //Delete this line, error in response
        
        $updated = Setting::find(1);
        $updated->zoho_token = $response['access_token'];
        $updated->zoho_token_created = Carbon::now();
        $updated->save();

        if($response):
            return response()->json(['success' => true]); 
        endif;

        /*Ej.
        {
            "access_token":"1000.6492ed8d3483e8b24f65b49ecbc64c13.1acae7b11e2b1b94faf6cb9603b5b21c",
            "api_domain":"https:\/\/www.zohoapis.com",
            "token_type":"Bearer",
            "expires_in":3600
        }*/
    }
}
