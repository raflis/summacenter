<?php

namespace App\Exceptions;

use Auth;
use Throwable;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    protected function unauthenticated($request, AuthenticationException $exception)
    {
        /*if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }*/
        if ($request->is('bolsa-de-trabajo') || $request->is('bolsa-de-trabajo/*')) {
            //return redirect()->guest('/bolsa-de-trabajo');
            return redirect()->route('bolsa.trabajo');
        }
        /*if ($request->is('myaccount') || $request->is('myaccount/*')) {
            return redirect()->route('login.index');
        }*/
        return redirect()->guest(route('login.index'));
    }
}
