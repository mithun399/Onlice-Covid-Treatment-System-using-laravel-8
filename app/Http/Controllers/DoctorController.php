<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Payment;


class DoctorController extends Controller
{
    public function showappointment(){
        $data=Appointment::all();
        return view('doctor.showappointment',compact('data'));
    }
    public function approved($id){
        $data=Appointment::find($id);
        $data->status='approved';
        $data->save();
        return redirect()->back();
    }
    public function canceled($id) {
        $data=Appointment::find($id);
        $data->status='canceled';
        $data->save();
        return redirect()->back();
    }
    public function showdoctor(){
        $data=Doctor::all();
        return view('doctor.showdoctor',compact('data'));
    }
    public function deletedoctor($id){
        $data= Doctor::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updatedoctor($id)
    {
        $data= Doctor::find($id);
        return view('doctor.update_doctor',compact('data'));
    }
    public function editdoctor(Request $req ,$id){
        $doctor= Doctor::find($id);
        $doctor->name=$req->name;
        $doctor->email=$req->email;
        $doctor->phone=$req->phone;
        $doctor->speciality=$req->speciality;
        $doctor->room=$req->room;
        if($req->hasfile('image')){
            $file=$req->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename= time().'.'.$extension;
            $file->move('doctor',$filename);
            $doctor->image=$filename;
        }
        $doctor->time=$req->time;
        $doctor->fee=$req->fee;
        $doctor->save();
        return redirect()->back();

    }
 function addAppointment(){
     
     return view('doctor.add_appointment');
 }
 function uploadAppoint(Request $req){
     $appointment=new Appointment;
     $appointment->name=$req->name;
     $appointment->email=$req->email;
     $appointment->date=$req->date;
     $appointment->time=$req->time;
     $appointment->phone=$req->phone;
     $appointment->message=$req->message;
     $appointment->save();
     return redirect()->back();
 }
 public function update($id)
 {
     $data= Appointment::find($id);
     return view('doctor.update',compact('data'));
 }
 function edit(Request $req,$id){
    $appointment=Appointment::find($id);
   
    $appointment->time=$req->time;
   
    $appointment->save();
    return redirect('showappointment');
}
function doctorPayment(){
        $doctorpayment=Payment::all();
        return view('doctor.doctorpayment',compact('doctorpayment'));
}
    
}
