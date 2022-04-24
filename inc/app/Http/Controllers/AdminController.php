<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Message;
use App\Models\Admin;
class AdminController extends Controller
{
    public function adminLogIn(Request $request){
     
        $admin = DB::table('admins')->first();
        // $infos = DB::table('messages')->get();
        // dd($infos->password);

        if($request->Uname == $admin->name and $request->Pass == $admin->password){
            $request->session()->put('name',$admin->name);
            return redirect()->route('admin');
        }
        else{
            session()->put('fail','Invalid User Name or Password.');
            return redirect()->route('signin');
        }
    }

    public function showMessages(Request $request){
     
        $infos = DB::table('messages')->get();

        if(session()->has('name')){
            
            return view('backend.pages.admin', compact('infos'));
        }
        return redirect()->route('signin');
        
    }

    public function adminLogOut(){

        if(session()->has('name')){
            session()->pull('name', null);
            session()->pull('fail', null);
        }
        return redirect()->route('signin');
    }
}
