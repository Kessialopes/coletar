<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function send(){
        return view('forgotPass');
    }
}
