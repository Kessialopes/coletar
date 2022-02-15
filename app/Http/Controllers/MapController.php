<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;
use App\Models\User;
use App\Models\Selet;

class MapController extends Controller
{
    public function index()
    {
    $search = request('search');  
      if($search){
        $selets = Selet::where([
           ['name','like','%'.$search.'%']
        ])->orWhere([
           ['city','like','%'.$search.'%']
        ])->orWhere([
           ['neighborhood','like','%'.$search.'%']
        ])->get();
      }else{
        $selets = Selet::all();
    }
    return view('home',['selets'=>$selets,'search'=>$search]);
    }

    public function show($id){
      $selet = Selet::find($id);
      return view('Show',['selet'=>$selet]); 
    }

}