<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function std(){
    	return view('insert');
    }

    public function insert(Request $req){
    	$std = new Student();

    	$std->name = $req->name;
    	$std->email = $req->email;
    	$std->mobile = $req->mobile;
    	$std->address = $req->address;

    	if($std->save()){
    		return redirect()->back();
    	}
    }
    public function show(){
    	$std = Student::all();
    	return view('allstudents',compact('std'));
    }

    public function update($id){
    	$std = Student::find($id);
    	return view('update',compact('std'));
    }

    public function updatestore(Request $req, $id){
    	$std = Student::find($id);

    	$std->name = $req->name;
    	$std->email = $req->email;
    	$std->mobile = $req->mobile;
    	$std->address = $req->address;

    	if($std->save()){
    		return redirect()->back();
    	}

    }

    public function delete($id){

    	$std = Student::find($id)->first();
    	$std->delete();
    	return redirect()->back();
    }
}
