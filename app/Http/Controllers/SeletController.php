<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;
use App\Models\User;
use App\Models\Selet;

class SeletController extends Controller
{
    //CADASTRO COLETA SELETIVA
    public function create(){
      return view('cadColeta');
    }
    public function store(Request $request){
        $selet = new Selet;

        $selet->name = $request->name;
        $selet->city = $request->city;
        $selet->neighborhood = $request->neighborhood;
        $selet->street = $request->street;
        $selet->number = $request->number;
        $selet->itens = $request->itens;
        $selet->phone = $request->phone;
        $selet->info = $request->info; 
        //IMAGE UPLOAD
        if($request->hasFile('image')&&$request->file('image')->isValid()){
            $requestImg = $request->image;
            $extension = $requestImg->extension();
            $imageName = md5($requestImg->getClientOriginalName()
            .strtotime("now")).".".$extension;
            $requestImg->move(public_path('/img/selets'),$imageName);
            $selet->image = $imageName;
        }
        /**************************************/
        $user = auth()->user();
        $selet->user_id = $user->id;
        $selet->save();

        return redirect('/coletadash')->with('msg','cadastro criado com sucesso');
    }

    public function coletadash(){
       $user = auth()->user();
       $selet = $user->selet();
       return view('seletiva',['user'=>$user,'selet'=>$selet]);
    }
    
    public function edit($id){
        $selet=Selet::find($id);
        return view('edit',['selet'=>$selet]);  
    }

    public function update(Request $request,$id){ 
        $data = $request->all();
        //IMAGE UPLOAD
        if($request->hasFile('image')&&$request->file('image')->isValid()){
            $requestImg = $request->image;
            $extension = $requestImg->extension();
            $imageName = md5($requestImg->getClientOriginalName()
            .strtotime("now")).".".$extension;
            $requestImg->move(public_path('/img/selets'),$imageName);
            $data['image'] = $imageName;
        }
        /**************************************/
        Selet::find($id)->update($data);
        return redirect('/coletadash')->with('msg','Ponto de Coleta Atualizado!');
    }

       
}
