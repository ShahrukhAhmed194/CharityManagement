<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\JoinUs;
use App\Models\NextJoin;


class MemberRequestController extends Controller
{
    public function showMemberRequests(Request $request){

        $list1 = DB::table('join_us')->where('status', 0)->get();
        $list2 = DB::table('next_joins')->where('status', 0)->get();

        // $infos = $info1->merge($info2);
        // $infos = array_merge($info1, $info2);
        return view('backend.pages.memberRequest',compact('list1','list2'));

    }

    public function showApprovedMembersList(Request $request){

        $list1 = DB::table('join_us')->where('status', 1)->get();
        $list2 = DB::table('next_joins')->where('status', 1)->get();

        // $infos = $info1->merge($info2);
        // $infos = array_merge($info1, $info2);
        return view('backend.pages.memberList',compact('list1','list2'));
    }

    public function deleteMemberRequest($nid){

        DB::table('join_us')->where('nid', $nid)->delete();
        DB::table('next_joins')->where('nid', $nid)->delete();

        return redirect()->route('requests');
    }

    public function acceptMemberRequest($nid){
        DB::table('join_us')->where('nid', $nid)->update(['status' => 1]);
        DB::table('next_joins')->where('nid', $nid)->update(['status' => 1]);

        return redirect()->route('members');
    }
}
