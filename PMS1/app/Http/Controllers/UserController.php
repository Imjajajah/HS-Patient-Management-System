<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function login(){
        if(View::exists('login')){
            return view('login');
        }else{
            return abort(404);
        }
    }

    public function process(Request $request){
        $validated = $request->validate([
            "email" => ['required', 'email'],
            "password" => 'required'
        ]);

        if(Auth::attempt($validated)){
            $request->session()->regenerate();

            return redirect('/dashboard')->with('message', 'Welcome back!');
        }
        return back()->withErrors(['email' => 'Login failed'])->onlyInput('email');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Logout successful');
    }

    // Controller action when adding a patient or editing info
    public function storeOrUpdate(Request $request)
    {
        // Perform your action (e.g., save new patient, update details)

        // Add new success message to the session as an array
        $message = 'New patient added successfully!';
        session()->push('messages.success', $message);

        return redirect()->back();
    }

    public function editPatient(Request $request, $id)
    {
        // Perform your action (e.g., update patient info)

        // Add success message to session
        $message = 'Patient information updated successfully!';
        session()->push('messages.success', $message);

        return redirect()->back();
    }






}
