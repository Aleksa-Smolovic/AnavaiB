<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'refresh']]);
    }

    public function login()
    {
        $credentials = request(['email', 'password']);

        if( User::where('email', '=', request(['email']))->first() == null)
            return response()->json(['error' => 'User with email does not exist'], 401);

        if (! $token = auth('api')->attempt($credentials)) 
            return response()->json(['error' => 'Unauthorized'], 401);
        if(auth('api')->user()->role->name == 'admin')
            return response()->json(['error' => 'Unauthorized'], 401);

        $returnJson = [
            'token' => $token
        ];
        return response()->json($returnJson);
        //return $this->respondWithToken($token);
    }


    public function me()
    {
        return response()->json(auth('api')->user());
    }

    public function logout()
    {
        auth('api')->logout();
        return response()->json(['message' => 'Successfully logged out']);
    }

    public function refresh()
    {
        return $this->respondWithToken(auth('api')->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }

}
