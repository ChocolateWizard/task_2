<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $formFields = $request->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'cover' => 'sometimes|required|mimes:jpg,bmp,png|max:30720',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:6|confirmed',
            'country_id' => 'required'
        ]);
        if ($request->hasFile('cover') === true) {
            $cover_url = $request->file('cover')->store('users/' . $request->username, 'public');
            unset($formFields['cover']);
            $formFields['cover_url'] = 'storage/' . $cover_url;
        }
        //Hash password
        $formFields['password'] = Hash::make($request->password);

        //Create user
        $user = User::create($formFields);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json(['data' => $user, 'access_token' => $token, 'token_type' => 'Bearer']);
    }

    public function login(Request $request)
    {
        $formFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json(['message' => 'Welcome ' . $user->username, 'access_token' => $token, 'token_type' => 'Bearer']);
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();
        // $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => "You have been logged out."]);
    }
}
