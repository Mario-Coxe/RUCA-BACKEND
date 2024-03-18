<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginRegisterController extends Controller
{

    /**
     * Register a new UserLogin.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Authenticate the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function register(Request $request)
    {

        $validate = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|string',
            'password' => 'required|string',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Erro na validação!',
                'data' => $validate->errors(),
            ], 403);
        }

        $user = new User;
        $user->name = $request->input('name');
        $user->password = $request->input('password');
        $user->phone_number = $request->input('phone_number');
        $user->email = $request->input('email');

        $email = $request->input('email');
        $phone_number = $request->input('phone_number');
        $user_email = User::where('email', '=', $email)->first();
        $user_phone_number = User::where('phone_number', '=', $phone_number)->first();
        if ($user_email !== null) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Email já existe!',
                'data' => $validate->errors(),
            ], 403);
        }
        if ($user_phone_number !== null) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Número já existe!',
                'data' => $validate->errors(),
            ], 403);
        }
        $user->save();

        return response()->json([
            'status' => 200,
            'message' => 'Usuário Criado',
            'data' => $user,

        ]);
    }



    public function login(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'phone_number' => 'required|string',
            'password' => 'required|string'
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Erro na validação!',
                'data' => $validate->errors(),
            ], 403);
        }

        $user = User::where('phone_number', $request->phone_number)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Credenciais Incorretas ou Conta não encontrada.'
            ], 401);
        }
        if ($user->is_active != 1) {
            return response()->json([
                'status' => 'failed',
                'message' => 'User is not active.',
            ], 401);
        }

        $token = $user->createToken($request->phone_number)->plainTextToken;
        $data = $user;

        $response = [
            'status' => 'success',
            'message' => 'Usuário logado com suecesso!',
            'token' => $token,
            'data' => $data,
        ];

        return response()->json($response, 200);
    }


    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Sessão terminado com sucesso!'
        ], 200);
    }
}
