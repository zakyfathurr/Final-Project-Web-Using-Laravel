<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;

use App\Models\Room;
use App\Models\Booking;

class HomeController extends Controller
{
    public function room_details($id){
        $room=Room::find($id);
        return view('home.room_details', compact('room'));
    }
    public function add_booking(request $request, $id){
        $data = new Booking();
        $data->room_id = $id;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;

        $startdate = $request->checkIn;
        $enddate = $request->checkOut;


        $isBooked = Booking::where('room_id', $id)
        ->where('checkIn','<=', $enddate) //and
        ->where('checkOut','>=', $startdate)->first();
        if($isBooked)
        {
            $message = 'Room is already booked for this period: ' . 
               $isBooked->checkIn . ' to ' . $isBooked->checkOut . '.';
            return redirect()->back()->with('error', $message);
        }else{
            $data->checkIn = $request->checkIn;
            $data->checkOut = $request->checkOut;
            $data->save();
            return redirect()->back()->with('success', 'Booking successful!');
        }
    }
}
