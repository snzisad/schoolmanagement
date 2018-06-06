<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\Catagory;
use App\Http\Model\Fee;
use App\Http\Model\Notice;


class AdminController extends Controller
{
    public function viewDashboard(){
    	$current_notice=Notice::where('display','1')->first();

    	return view('adminpanel.dashboard')->with(compact('current_notice'));
    }
    
    public function feeCollectionView(){
    	$catagories=Catagory::get();
    	return view("adminpanel.collectfee")->with(compact('catagories'));
    }

    public function addCatagory(Request $request){
    	$this->validate($request,[
    		'catagory'=>'required'
    	]);

        $catagory=Catagory::where('catagory',$request->catagory)->first();
        if($catagory){
            return redirect('/feecollection')->withErrors('Catagory alerady added');
        }
    	Catagory::create($request->all());

    	return redirect('/feecollection')->withErrors(array('message'=>'Catagory added successfully'));
    }

    public function collectFee(Request $request){
    	$this->validate($request,[
    		'student_id'=>'required|integer',
    		'catagory'=>'required',
    		'amount'=>'required|integer'
    	]);

    	if($request->catagory=='add-catagory'){
    		 return response()->json([
                'message' => "Fail"
            ], 200);
    	}

    	Fee::create($request->all());
    	
        return response()->json([
                'message' => "Success"
            ], 200);
    }
}
