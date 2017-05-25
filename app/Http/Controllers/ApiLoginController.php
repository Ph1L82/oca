<?php

namespace oca\Http\Controllers;

use Illuminate\Http\Request;
use oca\User;
use oca\Http\Controllers\ApiController;

class ApiLoginController extends Controller
{
    use ApiController;

    public function login(Request $loginRequest)
    {
        # code...
        $email = $loginRequest->input('email');
        $password = $loginRequest->input('password');
        $user = User::where('email', '=', $email)->first();

        if ($user->email) {
            # code...
            if (\Hash::check($password, $user->password)){
                # code...
                if($user->api_token == null){
                    $user->api_token = md5(uniqid(rand(), true));
                    $user->save();
                }
                $api_token = ['api_token' => $user->api_token];

                return $this->respond($api_token);
            }else{
                return $this->respondUnauthorized('Contraseña incorrecta');
            }
        }
        return $this->respondNotFound('No se encontró el usuario.');

    }

    public function logout(Request $logoutRequest)
    {
        # code...
        $token = $logoutRequest->input('api_token');
        $user = User::where('api_token', '=', $token)->first();
        if ($user->api_token == $token) {
            # code...
            $user->api_token = null;
            $user->save();


            return $this->respond(['message' => 'Sesión finalizada correctamente.', 'api_token' => null]);
        }
        /**
         * El orden de los factores altera el producto.
         *  La query debe ser con query params 1° api_token y 2° email
         */

    }

}
