<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shipment;
use Illuminate\Http\Request;

class MarkallController extends Controller
{
    public function MarkAsRead_contact(){
        $userUnreadNotifications=auth()->guard('admin')->user()->unreadNotifications->where('type','App\Notifications\Add_contact');

        if ($userUnreadNotifications){
            $userUnreadNotifications->markAsRead();
          //  $userUnreadNotifications->delete();
            return back();
        }

    }
    public function MarkAsRead_shipments(){
        $userUnreadNotifications=auth()->guard('admin')->user()->unreadNotifications->where('type','App\Notifications\Add_shipment');
        if ($userUnreadNotifications){
            $userUnreadNotifications->markAsRead();
            //  $userUnreadNotifications->delete();
            return back();
        }

    }

    public function MarkAsRead_priceOrder(){
        $userUnreadNotifications=auth()->guard('admin')->user()->unreadNotifications->where('type','App\Notifications\Add_OrderPrice');

        if ($userUnreadNotifications){
            $userUnreadNotifications->markAsRead();
            //  $userUnreadNotifications->delete();
            return back();
        }

    }
    public function show($id){
      $shipment=  Shipment::findorFail($id);
        $userUnreadNotifications=auth()->guard('admin')->user()->unreadNotifications->where('type','App\Notifications\Add_shipment');
        $userUnreadNotifications->markAsRead();
        return view('livewire.show_shipment_table',compact('shipment'));

    }

}
