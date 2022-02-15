<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Selet;
class LoginController extends Controller
{


    //USUARIO LOGIN
    public function inicio(){return view('welcome');}
    public function logdonate(){return view('coletorLog');}    
    public function userlog(Request $request){
       $credentials = $request->validate([
                     'email'=>['required','email'],
                     'password'=>['required'],
        ],[
            'email.required'=>'email obrigatorio',
            'password.required'=>'senha obrigatoria'
        ]);
        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
             return redirect('/dashboard');
        }else{
            return back()->withErrors([
            'email' => 'email ou senha incorretas.',
            ]);
        }
      }
    //COLETA SELETIVA LOGIN
    public function painel(){return view('coletaLog');}
    public function seletlog(Request $request){
      $credentials = $request->validate([
                     'email'=>['required','email'],
                     'password'=>['required'],
        ],[
            'email.required'=>'email obrigatorio',
            'password.required'=>'senha obrigatoria'
        ]); 
        if (Auth::attempt($credentials)){
            if(auth()->user()->isSeletiva == 2){
                $request->session()->regenerate();
                return redirect('/coletadash');
            }else{return redirect()
                  ->with(['email'=>'Somente pontos de coleta são autorizados!']);}
               
        }else{
            return back()->withErrors([
            'email' => 'email ou senha incorretas.',
            ]);
        }
      }
            
    public function logout(Request $request){
     Auth::logout();
     $request->session()->invalidate();
     $request->session()->regenerateToken();
     return redirect('/');
    }

}
 