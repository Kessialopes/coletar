<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Selet;

class SeletController extends Controller
{
    
// COLETA SELETIVA LOGIN

 public function painel(){return view('coletaLog');}


    public function entrada(Request $request){
        $credentials = dd($request)->validate([
                     'email'=>['required','email'],
                     'password'=>['required'],
        ],[
            'email.required'=>'email obrigatorio',
            'password.required'=>'senha obrigatoria'
    ]);
        
        
        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
             Auth::guard('selet')->user();
             return redirect('/coletadash');
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
    //CADASTRO COLETA SELETIVA
    public function create(){return view('cadColeta');}
    public function store(){
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'city'=>'required',
            'neighborhood'=>'required',
            'password' => 'required'
            //'password' => 'required|between:8,255|confirmed',
            //'password_confirmation' => 'confirmed '
        ]);
        $selet = Selet::create(request(['name', 'email', 'city','neighborhood',
            'password']));
        auth()->login($selet);
        //Auth::login($selet);
        return redirect('/coletadash')->with('msg','cadastro criado com sucesso');
    }
    public function coletadash(){
        //$selet = auth()->selet();
        Auth::guard('selet')->user();
       return view('seletiva')->with('msg','wilkommen');
    }
//******** AUTHENTICATE TEST!!!!!********

public function authenticated()
    {
        if(Auth::guard($this->getGuard())->selet()->hasRole('selet')){
            return redirect('/coletadash');
        }

        return redirect()->intended($this->redirectPath());
    }



}
