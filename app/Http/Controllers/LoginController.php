<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{
    public function form(){
        return view('login');
    }

    public function login(Request $request){
        $input = $request->only('user', 'pass');
        $access = $this->_checkCredentials($input);
        if (!$access) {
            Session::flash('error','Credenciales ivalidas');
            return redirect()->back();
        }
        Session::put('user', $input);
        return redirect()->route('home');

    }

    public function logout(){
        Session::forget('user');
        return redirect()->route('home');
    }

    public function _checkCredentials($input){
        $credentials = [
            'user' => 'root',
            'pass' => 'root'
        ];

        if (!isset($input['user']) || !isset($input['pass'])){
            return false;
        }
        $access = $credentials['user'] == $input['user'] && $credentials['pass'] == $input['pass'];
        return $access;
    }
}
