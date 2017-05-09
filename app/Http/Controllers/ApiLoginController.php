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


        //echo $user->password;
        //dd(bcrypt($password));
        if ($user->email) {
            # code...
            if (\Hash::check($password, $user->password)){
                # code...
                $user->api_token = md5(uniqid(rand(), true));
                $user->save();

                return $this->respond($user->api_token);
            }else{
                return $this->respondUnauthorized('Contraseña incorrecta');
            }
        }
        return $this->respondNotFound('No se encontró el usuario.');

    }

    public function logout(Request $logoutRequest)
    {
        # code...
        $email = $logoutRequest->input('email');
        $token = $logoutRequest->input('api_token');
        $user = User::where('email', '=', $email)->first();
        if ($user->api_token == $token) {
            # code...
            $user->api_token = null;
            $user->save();

            return $this->respond('Sesión finalizada correctamente.');
        }
        /**
         * El orden de los factores altera el producto.
         *  La query debe ser con query params 1° api_token y 2° email
         */

    }

}
