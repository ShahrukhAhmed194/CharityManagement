<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Message;
use App\Models\Admin;

class AdminController extends Controller
{
    public function goToAdminSignInPage(){
        if(session()->has('name')){
            return redirect()->route('admin');
        }
        return view('backend.pages.adminLogin');
    }

    public function adminLogIn(Request $request){
     
        $admin = DB::table('admins')->first();
        // $infos = DB::table('messages')->get();
        // dd($infos->password);Hash::check('plain-text', $hashedPassword)

        if(($request->Uname == $admin->name) and (Hash::check($request->Pass, $admin->password))){
            $request->session()->put('name',$admin->name);
            return redirect()->route('admin');
        }
        else{
            $request->session()->flash('fail', "Invalid User Name or Password." );
            // session()->put('fail','Invalid User Name or Password.');
            return redirect()->route('signin');
        }
    }

    public function showMessages(Request $request){
     
        $infos = DB::table('messages')->get();
            
        return view('backend.pages.admin', compact('infos'));
    }

    public function adminLogOut(){

        if(session()->has('name')){
            session()->pull('name', null);
            session()->pull('fail', null);
        }
        return redirect()->route('signin');
    }
}
