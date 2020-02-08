<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\contact;
class mailcontroller extends Controller
{

  public function tosend(Request $request )
    {
        
            $request->validate([
            'name'=>'required',
         'email'=>'required',
      'body'=>'required' ]);
     $name=$request->input('name'); 
      $Email=$request->input('email');      
       $body=$request->input('body');
 
mail::to("om.ist.ofuk@gmail.com")->send(new contact($name,$Email,$body));
return redirect('contact');
    }
    
}
