<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Http\Response;
use Tymon\JWTAuth\Exceptions\TokenBlacklistedException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

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
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Exception
     */
    public function render($request, Exception $exception)
    {   
        if($exception instanceof TokenBlacklistedException){
            return response(['error'=>'this token can not be used, use new one'],Response::HTTP_BAD_REQUEST);
        }elseif($exception instanceof TokenInvalidException){
            return response(['error'=> 'The token is invalid'],Response::HTTP_BAD_REQUEST);
        }
        elseif($exception instanceof TokenExpiredException){
            return response(['error'=> 'The token has been expired'],Response::HTTP_BAD_REQUEST);
        }
        elseif($exception instanceOf JWTException){
            return response(['error'=> 'The token has not been provided'],400);
        }
        return parent::render($request, $exception);
    }
}
