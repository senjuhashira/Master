<?php

namespace App\Http\Controllers;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Mail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class usercontroller extends Controller 
{
    public function sendEmail(Request $request,$id)
    {
        $user=User::findOrFail($id);
        
        Mail::send('email.reminder',['user' => $user], function ($m) use ($user) {
            $m->from('anhkhoa.1907@gmail.com','your application');
            
            $m->to($user->email,$user->name)->subject('Your reminder');
        });
    }
}
