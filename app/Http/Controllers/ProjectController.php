<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Booking;
use App\Models\Department;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function getall(){
        $data=Department::all();
        return view('home' , compact('data'));
    }

    public function showAppointment( Request $request){
        $department_id= $request->input('department_id');
       $data= Appointment::where('department_id', $department_id)->get();
       return view('project.appointment' , compact('data'));

    }


    public function bookAppointment(Request $request){
        $appointment_id=$request->input('appointment_id');
        $department_name=$request->input('department_name');
        $appointment_date=$request->input('appointment_date');
       $exists= Booking::where('appointment_id', $appointment_id)->exists();
       if( $exists){
        //tell user it has been booked by someone else
        Session::flash('message','Apppointment was already booked');
        Session::flash('alert-class','alert-danger');
        return redirect('/');
       }else{
        $booking=new Booking;
        $booking-> appointment_id =  $appointment_id;
        $booking->  department_name =   $department_name;
        $booking->  appointment_date =   $appointment_date;
        $booking->username= Auth::user()->name;
        $booking->user_id= Auth::user()->id;

        $booking->save();
        Appointment::where('id',$appointment_id)->update(['taken'=>1]);
        Session::flash('message','Apppointment booked successfully');
        Session::flash('alert-class','alert-success');
        return redirect('/');
       }
    }

    public function myBookings(){
        $bookings=Booking::where('user_id',Auth::user()->id)->get();
        return view('project.mybookings',compact('bookings'));
    }

    public function redirect(){
        $user=Auth::user()->usertype;
        if($user == 1)
        return view('dashboard');
        else
        return  to_route('home');
    }

}



