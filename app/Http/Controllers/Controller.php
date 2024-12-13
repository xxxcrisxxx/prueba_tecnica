<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Log;

abstract class Controller
{
    public function index()
    {
        $users = User::get();
        return view('private.users.index', compact('users'));
    }

    public function create()
    {
        return view('private.users.createUsers');
    }

    public function store(UserRequest $request)
    {
        $userData = $request->validated();

        try {
            $registerUser = User::create($userData);
            if ($registerUser) {
                return back()->with('success', 'Registro realizado correctamente');
            } else {
                return back()->with('error', 'Error al registrar intentalo de nuevo mas tarte');
            }
        } catch (\Exception $e) {
            Log::info($e->getMessage());
        }
    }

    public function destroy($id)
    {
        dd($id);
    }
}
