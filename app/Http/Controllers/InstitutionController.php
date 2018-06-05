<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\Institution;
use Illuminate\Support\Facades\Storage;

class InstitutionController extends Controller
{
    public function InstitutionDetailsView(){
    	$institution=Institution::orderBy('id','desc')->first();
    	return view('adminpanel.institution')->with(compact("institution"));
    }

    public function editInstitutionDetails(Request $request){
    	$this->validate($request,[
                'Address' => 'required',
                'Estd' => 'required|integer',
                'Eiin' => 'required|integer',
                'Head' => 'required',
                'Chairman' => 'required',
                'Phone' => 'required',
                'Email' => 'required',
                'logo' => 'mimes:png',
            ]);

    	Institution::create($request->all());

    	if($request->hasFile('logo')){
        	$request->logo->storeAs('public/images','logo.png');
    	}

    	return redirect('/institution');
    }
}
