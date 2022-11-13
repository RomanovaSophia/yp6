<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
class AuthController extends Controller
{
    public function register(Request $request)
    {
        //Валидируем запрос
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
        ]);
        //Выводим ошибки если есть
        if($validator->fails()){
            return $validator->errors();
        }
        //Создаем пользователя
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        //Сохраняем токен
        $token = $user->createToken('auth_token')->plainTextToken;
        //Отправляем ответ
        return ([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);

    }
    public  function login(Request $request)
    {
        //Валидируем запрос
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        //Выводим ошибки если есть
        if($validator->fails()){
            return $validator->errors();
        }
        //Пробуем авторизоваться
        if (!Auth::attempt($request->only('email', 'password'))) {
            return  response()->json(([
                'message' => 'Invalid login details']), 401);
            return response()->json(([
                'message' => 'Invalid login details']), 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;


        return ([
            'email' => $request['email'],
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }
}
