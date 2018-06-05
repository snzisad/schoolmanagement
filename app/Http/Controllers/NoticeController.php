<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\Notice;

class NoticeController extends Controller
{
    public function viewNoticeList(){
    	$current_notice=Notice::where('display','1')->first();
    	$prev_notices=Notice::where('display','0')->paginate(10);

    	return view('adminpanel.noticelist')->with(compact('current_notice','prev_notices'));
    }

    public function addNewNotice(Request $request){
    	$this->validate($request,[
                'notice' => 'required',
                'display' => 'required',
            ]);

        Notice::where('display',1)->update([
            'display'=>0
        ]);
        
        Notice::create($request->all());


    	return redirect('/noticelist')->withErrors(array('message'=>"Notice Added Successfully"));
    }

    public function makeCurrentNotice($id){
    	Notice::where('display',1)->update([
            'display'=>0
        ]);

        Notice::where('id',$id)->update([
            'display'=>1
        ]);

        return redirect('/noticelist')->withErrors(array('message'=>"Current Notice Changed Successfully"));
    }

    public function removeNotice($id){
        Notice::where('id',$id)->delete();

        return redirect('/noticelist')->withErrors(array('message'=>"Notice Deleted Successfully"));
    }

     public function editNotice(Request $request){
    	$this->validate($request,[
                'notice' => 'required',
            ]);


    	if($request->display==1){
	        Notice::where('display',1)->update([
	            'notice'=>$request->notice
	        ]);
    	}
    	else{
    		Notice::where('id',$request->id)->update([
	            'notice'=>$request->notice
	        ]);
    	}

    	return redirect('/noticelist')->withErrors(array('message'=>"Notice Updated Successfully"));
    }
}
