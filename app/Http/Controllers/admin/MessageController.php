<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages= Message::all();
        return view('admin.messages',compact('messages')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user_email= $request->sendto;
        return view('admin.reply',compact('user_email')); 
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>"required|string|max:150",
            "subject"=>"required|string|max:120",
            "message"=>"required|string|max:800",
        ]);

        // $user=User::where('email','LIKE',$request->email)->get();
            $user=$request->sendto;
       if($user){
        $message = new Message();
        $message->name =auth()->user()->name;
        $message->email = 'admin@test.com';
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->sendto = $request->sendto;
        $message->status='recieve';

        $message->save();
        return back()->with('success','data sended  successfully !');
       }else{
        return back()->with('flase','this email not exist');
       }
        
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
