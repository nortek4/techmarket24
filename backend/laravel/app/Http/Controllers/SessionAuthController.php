<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionAuthController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:4',
        ]);

        if (!Auth::attempt($data, true)) {
            return response()->json(['message' => 'Niepoprawne dane logowania'], 401);
        }

        $request->session()->regenerate();

        $u = $request->user();
        return response()->json([
            'id' => $u->id,
            'name' => $u->name,
            'email' => $u->email,
            'is_admin' => $u->is_admin,
        ]);
    }

    public function me(Request $request)
    {
        $u = $request->user();
        if (!$u) return response()->json(['message' => 'Nie znaleziono użytkownika'], 401);

        return response()->json([
            'id' => $u->id,
            'name' => $u->name,
            'email' => $u->email,
            'is_admin' => $u->is_admin,
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->json(['message' => 'Wylogowano']);
    }
}
