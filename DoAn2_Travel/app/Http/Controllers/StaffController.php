<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Position;
use Session;

class StaffController extends Controller
{
    public function add_staff(){
        return view('Admin_Views.Staff_Management.Add_Staff');
    }
    public function save_staff(Request $request){
        $staff= new Staff;
        $staff->position_id=$request['position_id'];
        $staff->staff_name=$request['staff_name'];
        $staff->staff_birth=$request['staff_birth'];
        $staff->staff_nationality=$request['staff_nationality'];
        $staff->staff_phone_number=$request['staff_phone_number'];
        $staff->staff_address=$request['staff_address'];
        $staff->staff_email=$request['staff_email'];
        $staff->staff_password=md5($request['staff_password']);
        Session::put('message','*successfully added');
        $staff->save();
        Session::put('message','*successfully added');
        return redirect('/add-staff');
    }
    public function show_list($position_id){
        $staff = Staff::where('position_id',$position_id)->get();
        return view('Admin_Views.Staff_Management.List_Staff')->with(compact('staff'));
    }
}
