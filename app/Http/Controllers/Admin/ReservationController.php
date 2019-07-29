<?php
namespace App\Http\Controllers\Admin;

use App\Reservation;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('admin.reservation.index',compact('reservations'));
    }
    public function status($id){
        $reservation = Reservation::find($id);
        $reservation->status = true;
        $reservation->save();
        
        return redirect()->back()->with('successMsg', 'successful confirmation');
        
    }

    public function destory($id){
        Reservation::find($id)->delete();
        return redirect()->back()->with('successMsg','Reservation Successfully Deleted');
    }
}