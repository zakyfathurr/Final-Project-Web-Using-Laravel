<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Users;

use Illuminate\Support\Facades\Auth;

use App\Models\Room;
use App\Models\Booking;
use PDF;
class AdminController extends Controller
{
    public function index(){

        if(Auth::id()){
            $usertype = Auth()->user()->usertype;
            $room = Room::all();
            if($usertype=='user')
            {
                return view('home.index',compact('room'));
            }else if($usertype=='admin')
            {
                $room = Room::all();
                return view('admin.index',compact('room'));
            }else{
                return redirect()->back();
            }
        }
    }
    public function index_home(){

        if(Auth::id()){
            $usertype = Auth()->user()->usertype;
            $room = Room::all();
            if($usertype=='admin')
            {
                return view('home.index',compact('room'));
            }
        }
    }
    public function home(){
        $room = Room::all();
        return view('home.index',compact('room'));
    }
    public function perform()
    {
        // Session::flush();
        
        Auth::logout();

        return redirect('');
    }
    public function create_room(){
        return view('admin.create_room');
    }
    public function add_room(Request $request){
        $data = new Room();
        $data->room_title= $request->room_title; 
        $data->description= $request->description;
        $data->price= $request->price;
        $data->room_type= $request->type;
        $data->wifi= $request->wifi;
        $image= $request->image;
        if ($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('room',$imagename);
            $data->image=$imagename;
        }     
        $data->save();
        return redirect()->back();
    }
    public function view_room(){
        $data = Room::all();   //variabel untuk data di database untuk digunakan pada foreach
        return view('admin.view_room',compact('data'));
    }
    public function delete_room($id){
        $data = Room::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function update_room($id){
        $data = Room::find($id);
        return view('admin.edit_room',compact('data'));
    }
    public function edit_room(Request $request, $id)
    {
        $data = Room::find($request->id);
        $data->room_title= $request->room_title; 
        $data->description= $request->description;
        $data->price= $request->price;
        $data->room_type= $request->type;
        $data->wifi= $request->wifi;
        $image= $request->image;
        if ($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('room',$imagename);
            $data->image=$imagename;
        }     
        $data->save();
        return redirect()->back();
    }
    public function booking_data(){
        $data = Booking::all();   //variabel untuk data di database untuk digunakan pada foreach
        return view('admin.booking_data',compact('data'));
    }
    public function delete_booking($id){
        $data = Booking::find($id);
        $data->delete();
        
        return redirect()->back();
    }

    public function cetak_pdf()
    {
    	$room = Room::all();
 
    	$pdf = PDF::loadview('admin.room_pdf',['room'=>$room]);
    	return $pdf->stream();
    }
}
