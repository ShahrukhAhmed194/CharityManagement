<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Message;

class MessageController extends Controller
{
    
    public function saveVisitorMessage(Request $request){
        // dd($request->all());
        $infos = new Message;

        $infos->name = $request->name;
        $infos->email = $request->email;
        $infos->subject = $request->subject;
        $infos->message = $request->message;

        $infos->save();

        $request->session()->flash('success', 'Your Message Has Been Sent.');
        return redirect()->route('contact');
    }

    public function deleteMessages($id){
        DB::table('messages')->where('id', $id)->delete();

        return redirect()->route('admin');
    }
}