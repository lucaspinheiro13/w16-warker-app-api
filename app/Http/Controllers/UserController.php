<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Método de Login para criação do Token de Acesso
     * 
     * @return JsonResponse
     */
    public function index(Request $request){
        $user = User::where('email',$request->email)->first();
        
        if(!$user || !Hash::check($request->password,$user->password)){
            return $this->jsonResponse([
                'Message'=>['Essas Credenciais estão incorretas']
            ],404);
        }

        $token = $user->createToken('token_app')->plainTextToken;
        $user->api_token = $token;
        $user->save();
        $response = [
            'user'=>$user->name,
            'token'=>$token
        ];

        return $this->jsonResponse($response,201);

    }
    /**
     * Método de Registro de Usuário 
     * 
     * @return JsonResponse
     */
    public function register(UserRequest $request){

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        
        $user = new User();
        $user['name'] = $input['name'];
        $user['email'] = $input['email'];
        $user['password'] = $input['password'];
     
        $result = $user->save();
        if($result){
         
            
            
            return $this->jsonResponse(["Registrado com Sucesso"],200);
        } 

        return abort(500);
    }
    /**
     * Método de Login para criação do Token de Acesso
     * 
     * @return JsonResponse
     */
    public function getMe(Request $request){
        if($request->hasHeader("Authorization")) {
            $token = $request->header('Authorization');
         
            $token = str_replace("Bearer ","",$token);
           
            $user = User::where('api_token',$token)->first();
           
            if($user != null) {
                return $this->jsonResponse($user, 200);
            }

            return $this->jsonResponse('User not found', 404);

        }
    }

      /**
     * Logout and Remove Token from Database
     * 
     * @param User $user 
     */
    public function logout(User $user) {
        $user->api_token = null;
        $user->tokens()->delete();
        $user->save();
        return $this->jsonResponse('Logout Successfully',200);
    
    }
}
