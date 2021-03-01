<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;

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
        $this->renderable(function(Exception $e,$request){

         
            if($e instanceof MethodNotAllowedHttpException && $request->wantsJson()){
                return response()->json("Método não autorizado para está rota",405,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
            }
            if($e instanceof NotFoundHttpException ){
                if ($request->user){
                    return redirect('/dashboard');
                } else {
                    return redirect('/login');
                }
            
            }
            if($e instanceof NotFoundHttpException && $request->wantsJson()){
                return response()->json("Dados não encontrados",404,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
            }
            if($e instanceof QueryException && $request->wantsJson()){
                return response()->json('Faltam Dados na sua estrutura'.$e->getMessage() ,401,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
 
            }
            if($e instanceof HttpException && $request->wantsJson()){
                return response()->json('Acesso negado!',401,['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
            }

          
    
        });

        
    }

   
}
