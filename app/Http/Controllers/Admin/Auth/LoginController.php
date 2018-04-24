<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    /**
     * Show Login Admin User
     *
     * @param  int  $id
     * @return Response
     */
    
    public function show()
    {
        
        if ( Auth::check() )
        {
            return redirect('admin/dashboard');
        }

        return view('parts.admin.auth.login');

    }

    public function postLogin(Request $request)
    {
        $login = [
            'email' => $request->email, 
            'password' => $request->password
        ];
        if (Auth::attempt($login)) {
            return redirect('admin/dashboard');
        } else{
            return redirect()->back();
        }
    }

    public function getLogout(){
        Auth::logout();
        return redirect('auth/login');
    }
}