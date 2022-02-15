<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Auth\CanResetPassword;
use App\Models\User;
use App\Models\Selet;

class UserController extends Controller
{
    //CADASTRO FUNCTIONS
    public function create(){return view('create');}
    public function store(){

        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required',
            'isSeletiva'=>'required',
            'password' => 'required|between:8,255',
            'password_confirmation' => 'confirmed '
        ]);
        $user = User::create(request(['name', 'email', 'password','isSeletiva']));
        auth()->login($user);
        if ('isSeletiva'==2) {
            return redirect('/cadcoleta');
        }else{
        return redirect('/Home');  
    } 
}
    /**********************************************************************/

    public function dashboard(){
        $user = auth()->user();
       return view('dash',['user'=>$user])->with('msg','wilkommen');
    }
   
//FUTURE FUNCTIONALITY
/*

*/

}
/*
    **********************************************************************
    */
    //ALTERAR SENHA
   /* public function forgotPass(){return view('forgotPass');}
    public function changePass(Request $request){
     $request->update([
        'password'=> 'required',
        'new_password'=>'required|confirmed'
     ]);
     if(password_verify($request->input('password'),
        Auth::user()->password)){
        $user->password = bcrypt($request->input('new_password'));
        $user->save();

        return redirect('/dashboard')->with('msg','senha alterada com sucesso.');
     }else{
        return back()->with('danger','Senha atual não compativel');
      }
    }*/
    /*
    **********************************************************************
    */