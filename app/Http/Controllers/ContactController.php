<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index(){
        return view('front.contacts');
    }

    public function allmessages(){
        $messages= Message::all();
        return view('admin.messages',compact('messages')); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>"required|string|max:150",
            'email'=>"required",
            "subject"=>"required|string|max:120",
            "message"=>"required|string|max:800",
        ]);

        $user=User::where('email','LIKE',$request->email)->get();

       if($user){
        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;
        if(Auth::user()->type === 'user'){
            $message->sendto = 'admin@gmail.com';
            $message->status='send';
        }

        $message->save();
        return back()->with('success','data inserted  successfully !');
       }else{
        return back()->with('flase','this email not exist');
       }
        
    }
}
