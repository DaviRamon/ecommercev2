<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{   

    public function __construct()
    {
          // somente o guest (convidado) pode acessar o AdminLoginController
        $this->middleware('guest:admin');
    }


    public function login(Request $request)
    {   
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);


        $credentials = [  

            'email' => $request->email,
            'password'=> $request->password
        ];

        $authOk = Auth::guard('admin')->attempt($credentials, $request->remember);

        if ($authOk){
            return redirect()->intended(route('admin.dashboard'));
        }
        return redirect()->back()->withInputs($request->only('email', 'remember'));

    }

    public function index()
    {
        // abre a view de login
        return view ("auth.admin-login");
    }

}