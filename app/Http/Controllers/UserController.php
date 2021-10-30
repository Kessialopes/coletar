<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Auth\Passwords\PasswordResetServiceProvider;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;


class UserController extends Controller
{
    //PAGINA INICIAL
    public function inicio(){
    return view('welcome');
    }
    
    public function acesso(Request $request){
       $this->validate($request,[
            'email'=> 'required',
            'password'=>'required'
    ],[
        'email.required'=>'email obrigatorio',
        'password.required'=>'senha obrigatoria'
    ]);
      if(Auth::attempt(['email'=>$request->email,
                        'password'=>$request->password])){
          return redirect('/dashboard');
      }
      else{
            return redirect()
            ->back()->with('danger','email ou senha invalidos!');
        } 
      }
    public function logout(Request $request){
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
    }
    /*
    **********************************************************************
    */
    //ALTERAR SENHA
    public function forgotPass(){return view('forgotPass');}
    public function changePass(Request $request){
     $request->validate([
        'email'=> 'required',
        'password'=> 'required',
        'new_password'=>'required|confirmed'
     ]);
     if(password_verify($request->input('password'),
        Auth::user()->password)){
        //$user = Auth::user();
        $user->password = bcrypt($request->input('new_password'));
        $user->save();

        return redirect('/dashboard')->with('msg','senha alterada com sucesso.');
     }else{
        return back()->with('danger','Senha atual não compativel');
      }
    }

    /*
    **********************************************************************
    */
    //CADASTRO FUNCTIONS
    public function create(){return view('create');}
    public function store(){
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|between:8,255',
            'password_confirmation' => 'confirmed '
        ]);
        $user = User::create(request(['name', 'email', 'password']));
        auth()->login($user);
        return redirect('/dashboard')->with('msg','cadastro criado com sucesso');
    } 

    /**********************************************************************/

    public function dashboard(){
        $user = auth()->user();
       return view('dash')->with('msg','wilkommen');
    }
       
}
