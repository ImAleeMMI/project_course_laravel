<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show(){
        $user = Auth::user();

        return view('user.show', compact('user'));
    }

    public function edit(){
        $user = Auth::user();
        return view('user.edit', compact('user'));
    }

    public function update(UserRequest $request){

        $user = Auth::user();

        User::where('id', $user->id)->update($request->validated());

        return redirect()->route('user.show')->with('success', 'Aggiornato con successo il profilo utente');
    }
}
