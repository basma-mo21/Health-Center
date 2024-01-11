<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Booking;
use App\Models\Department;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showDepartments(){
        $data=Department::all();
        return view('admin.showdepartments' , compact('data'));
    }

    public function addDepartments(){
        return view('admin.adddepartment');
    }

    public function storeDepartment(Request $request){

        $path=$request->image->store('public/department');
        Department::create([
            "name"=>$request->name,
            "content"=>$request->content,
            "image"=>$path,
        ]);
        return redirect()->route('showdepartments');
    }


    public function deleteDepartments($id){
        $data=Department::find($id);
        $data->delete();
        return redirect()->back();

    }



    public function showAppointments(){
        $data=Appointment::all();
        return view('admin.showappointment' , compact('data'));
    }

    public function addApointments(){
        return view('admin.addapointment');
    }


    public function storeAppointment(Request $request){
        Appointment::create([
            "department_name"=>$request->department_name,
            "department_id"=>$request->department_id,
            "appointment_date"=>$request->appointment_date,
            "taken"=>$request->taken,
        ]);

        return redirect()->route('showappointments');

    }



    public function deleteAppointment($id){
        $data=Appointment::find($id);
        $data->delete();
        return redirect()->back();

    }


    public function showBooking(){
        $data=Booking::all();
        return view('admin.booking', compact('data'));
    }

    public function deleteBooking($id){
        $data=Booking::find($id);
        $data->delete();
        return redirect()->back();

    }
}


