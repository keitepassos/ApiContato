<?php

namespace App\Http\Middleware;
use App\User;
use Firebase\JWT\JWT;
use Illuminate\Auth\GenericUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Closure;

class Autenticador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            $this->app['auth']->viaRequest('api', function (Request $request) {
                if (!$request->hasHeader('Authorization')) {
                    throw new \Exception();         
                }
                $authorizationHeader = $request->header('Authorization');
                $token =str_replace('Bearer ','',$authorizationHeader);
                $dadosAutenticacao = JWT::decode($token,env('JWT_KEY'),['HS256']);
               // return new GenericUser(); 
               $usuario = User::where('email', $dadosAutenticacao->email)
               ->first();
            });
            if(is_null($usuario))
                throw new \Exception();
    
            return $next($request);
        } catch (\Throwable $th) {
            return response()->json('Não autorizado', 401);
        }
       
    }
}
