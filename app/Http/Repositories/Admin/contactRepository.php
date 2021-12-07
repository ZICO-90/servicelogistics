<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\contactInterface;
use App\Models\contact;
use Illuminate\Support\Facades\Storage;


class contactRepository implements contactInterface
{
    private $contact;
    public function __construct(contact $pram)
    {
        $this->contact = $pram;
    }
    public function index(){
        $contact = contact::latest()->get();
        return view('Dashboard.contact.index',compact('contact'));
    }

    public function create(){
        return view('endUser.contact');
    }

    public function store($request){
        $data =$request->validated();

        contact::create($data);
        return redirect()->back();
    }

   public function show($id){
        $contact =contact::findorfail($id);
        return view('Dashboard.contact.show',compact ('contact'));
   }

    public function destroy($id){
        $conv = contact::findorfail($id);
        $conv->delete();
        return redirect()->route('contact.index');
    }

}
