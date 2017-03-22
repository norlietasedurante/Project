<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\student;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model;
use App\Students;

class LVCCController extends Controller
{
    public function showindex(Request $request){
		return view ('Welcome');
	}

    public function index(Request $request){
        return view ('home');
    }
	 public function showabout(Request $request){
	 	return view ('About');
	}
	public function showAchievement(Request $request){
		return view ('Achievements');
	}
	public function showRules(Request $request){
		return view ('rules');
	}
	public function showNext(Request $request){
		return view ('rules1'); 
	}
	public function showBack(Request $request){
		return view ('rules');
	}
	public function showOther(Request $request){
		return view ('rules2');
	}
	public function showForms(Request $request){
		return view ('form');
	}
	public function showList(){
        // $users = DB::table('students')->get();
        // return view('Show-list',[
            // 'users' => $users]);
		 $users = student::orderBy('id')->get();
        return view('Show-list', [
            'users' =>$users]);
    }
	  public function Request_form(Request $request)
    {
    	$name=$request->name;
    	$age=$request->age;
    	$address=$request->address;
    	$guardian=$request->guardian;
    	$course=$request->course;

    	$student = new student;
    	$student ->name = $name;
    	$student ->age = $age;
    	$student ->address = $address;
    	$student ->guardian = $guardian;
    	$student ->course = $course;
        $student ->save();

    		return view('complete' , [
    			'name' => $name,
    			'age' =>$age,
    			'address' => $address,
    			'guardian' => $guardian,
    			'course' => $course
    		]);

    
    }
    public function Update(Request $request){
        return view('update' , [
                'id'=>$request->id,
                'name' =>$request->Name,
                'age'=>$request->Age,
                'address'=>$request->Address,
                'guardian' =>$request->Guardian,
                'course'=>$request->Course

            ]);
}
public function editform(Request $request, $id){
       $student = student::find($id);
       $student ->name = $request->Name;
       $student ->age = $request->Age;
       $student ->address = $request->Address;
       $student ->guardian = $request->Guardian;
       $student ->course = $request->Course;
       $student ->save();

   return view('Show-list');    
}
public function deleteform(Request $request)
{
    $users = DB::table('students')->delete();
    return view('Show-list'); 
}


}