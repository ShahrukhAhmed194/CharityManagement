<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JoinUs;
use App\Models\NextJoin;
use App\Rules\PhoneValidation;

class JoinUsController extends Controller
{
   
    public function saveJoinUs(Request $request){
        $nid = strlen($request->nid);
        if($nid!=10 || $nid!=17){
            $request->validate([
                'nid' => 'required|numeric|digits:10 or 17'
            ]);
        }
        else{
            $request->validate([
                'nid' => 'required|numeric|unique:joinus'
            ]);
        }
        
        $request->validate([
        'name' => 'required',
        'occupation' => 'required',
        'institute' => 'required',
        'post' => 'required',
        'qualification' => 'required',
        'gender' => 'required',
        'height' => 'required|numeric|min:91|max:200',
        'birth_mark' => 'required',
        'father_name' => 'required',
        'mother_name' => 'required',
        ]);

        $info = new JoinUs;

        $info->name               =      $request->name;
        $info->nid                =      $request->nid;
        $info->occupation         =      $request->occupation;
        $info->institute          =      $request->institute;
        $info->post               =      $request->post;
        $info->qualification      =      $request->qualification;
        $info->gender             =      $request->gender;
        $info->height             =      $request->height." centimeter";
        $info->birth_mark         =      $request->birth_mark;
        $info->father_name        =      $request->father_name;
        $info->mother_name        =      $request->mother_name;
        
        $info->save();
        session(['nid' => $request->nid]);

        return redirect()->route('joinus1');
    }

    public function saveJoinUs1(Request $request){
        // dd($request->mobile);
        $request->validate([
            // 'nid'               => 'unique:next_joins',
            'mobile'            => ['required',new PhoneValidation],
            'email'             => 'required',
            'blood_group'       => 'required',
            'marital_status'    => 'required',
            'total_family_members' => 'required',
            'income'            => 'required|numeric',
            'present_address'   => 'required',
            'permanent_address' => 'required',
            'birth_date'        => 'required|before:today'
            
        ]);
            // dd($request->all());
            $info   = new NextJoin;
           

            $info->nid                   =      $request->nid;
            $info->mobile                =      $request->mobile;
            $info->email                 =      $request->email;
            $info->blood_group           =      $request->blood_group;
            $info->marital_status        =      $request->marital_status;
            $info->total_family_members  =      $request->total_family_members;
            $info->income                =      $request->income;
            $info->present_address       =      $request->present_address;
            $info->permanent_address     =      $request->permanent_address;
            $info->birth_date            =      $request->birth_date;
            
            $info->save();

            if($request->hasfile('image')){
                $request->validate([
                    'image' =>  'image|mimes:jpeg,png,jpg|max:3096'
                ]);
                $image = $request->file('image');
                $ext = $image->extension();
                $image_name = time().'.'.$ext;
                $image->storeAs('/public/profile',$image_name);
                
                $picture = JoinUs::where('nid',$request->nid)->first();
                $picture->image = $image_name;
                $picture->save();
            }
            
            // $request->session()->flush();
            $request->session()->flash('message', "Your Registration Is Complete." );
            return redirect()->route('joinus');

    }
}
