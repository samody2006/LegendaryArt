<?php

namespace App\Http\Controllers;


use App\Models\Message;
use Illuminate\Http\Request;


class MessageController extends Controller
{
    public function __construct(){
        $this->middleware(['role:admin|superadministrator']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
//    {
//
//        $data['message'] = Message::orderBy('created_at','desc')->get();
//        return view('backend.message.index',$data);
//    }
    {
        $messages = Message::orderBy('created_at','desc')->paginate(10);

        return view('backend.message.index',compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        $data['message'] = $message;
        return view('backend.message.show',$data);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
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
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        $message->delete();
        session()->flash('type','success');
        session()->flash('message','Message Successfully Deleted');
        return redirect()->route('message.index');
    }




}
