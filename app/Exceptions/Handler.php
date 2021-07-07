<?php

namespace App\Exceptions;

use Exception;
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
        //
    }

    protected function unauthenticated($request, AuthenticationException $exception)
    {
       if ($request->expectsJson()){
           return response()->json(['error'=>'Unauthenticate'],422);
       }
       //ata oi je login krete je error hobe tai that means je prodhom login krte jabe aijonno 0
       $guards=array_get($exception->guards(),0);
       $url="";
       if ($guards=='system_admin'){
           $url="/admin/login";
       }
       // }else{
       //     $url="/user/login";
       // }

       return redirect()->guest(url($url));
    }
}