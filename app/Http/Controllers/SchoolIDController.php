<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class SchoolIDController extends Controller
{
    public function showForm (Request $request){
    	return view ('form' , compact('students'));
    }

	public function processRegistration(Request $request){
		$id = $request->id;
		$f_name = $request->f_name;
		$mid_initial = $request->mid_initial;
		$l_name = $request->l_name;
		$course = $request->course;
		$stud_number = $request->stud_number;

		$student = new Students;
		$student->id = $id;
		$student->f_name = $f_name;
		$student->mid_initial = $mid_initial;
		$student->l_name = $l_name;
		$student->course = $course;
		$student->stud_number = $stud_number;
		$student->save();


		return view('complete-registration', [
			'id' => $id,
			'f_name' => $f_name,
			'mid_initial' => $mid_initial,
			'l_name' => $l_name,	
			'course' => $course,
			'stud_number' => $stud_number
		]);
    }

    public function showList(){
    	$students = students::orderBy('id')->get();

        return view('show-students' , [
            'students' => $students]);
    }


	public function ShowUpdateForm(Request $request) {
		
		return view('UpdateForm', [
			'id' => $request -> StudentID,
			'f_name' => $request ->	StudentFirstName,
			'mid_initial' => $request -> StudentMiddleInitial,
			'l_name' => $request -> StudentLastName,	
			'course' => $request -> StudentCourse,
			'stud_number' => $request -> StudentStudentNumber
			]);
	}

	public function editUser(Request $request,$id) {

    		$students = students::find($id);
			$students->f_name = $request->StudentFirstName;
			$students->mid_initial = $request->StudentMiddleInitial;
			$students->l_name = $request->StudentLastName;
			$students->course = $request->StudentCourse;
			$students->stud_number = $request->StudentStudentNumber;
			$students->save();

			return redirect('/show-list');
	}

	public function deleteUser(Request $request,$id){
			$students = students::find($id)->delete();
	        return redirect('/show-list');   
     }

}
