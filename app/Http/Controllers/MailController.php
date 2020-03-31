<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//import class MyEmail
use App\Mail\MyEmail;

//Import fitur Email Laravel
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    //
    public function index()
    {
      Mail::to('muhsinahadi25@gmail.com')->send(new MyEmail());

      return "Email telah dikirim";
    }
}
