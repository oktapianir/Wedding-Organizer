<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function ShowBooking()
    {
        return view('admin.booking');
    }

    // public function destroy($id)
    // {
    // $booking = Booking::FindOrFail($id);
    // $booking->delete();

    // return redirect()->back()->with('success', 'Booking deleted successfully.');
    // }

}
