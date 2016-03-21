<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class StudentController extends Controller
{
    public function index()
    {
    	$students = DB::table('tblstudent')->get();
        return view('student',compact('students'));
    }
}
