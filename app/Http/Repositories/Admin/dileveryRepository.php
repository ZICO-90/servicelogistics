<?php

namespace App\Http\Repositories\Admin;

use Illuminate\Http\Request;
use App\Http\Interfaces\Admin\dileveryInterface;
use  App\Models\DeliveryType;
use Illuminate\Database\Eloquent\Collection ;
use Illuminate\Support\Facades\File;
class dileveryRepository implements dileveryInterface
{

    private $dileveryModel;

public function __construct(DeliveryType $model){
    $this->dileveryModel  =  $model ;
}

    public function index()
    {
       $shiments = $this->dileveryModel::get();
      
        return view('Dashboard.dilevery.index',compact('shiments'));
    }

    public function create(){


        return view('Dashboard.dilevery.create');
    }


    public function store(Request $request){

        $fileNameIcon = null;
       
        if($request->file('icons') != null){

            // not null

            $fileNameIcon = time() . uniqid() . '.' . $request->file('icons')->getClientOriginalExtension();

            $result =   $request->file('icons')->move(public_path('Dashboard\img\delivery'), $fileNameIcon) ;
         
            
        }
        $fileNameimgs = null;
        if($request->file('imgs') != null){
            // nullable
            $fileNameimgs = time() . uniqid() . '.' . $request->file('icons')->getClientOriginalExtension();

            $result =   $request->file('imgs')->move(public_path('Dashboard\img\delivery'), $fileNameimgs) ;
           
         }

      
     
        $this->dileveryModel::create([
            'ar_name' => $request->input('ar_name'),
            'en_name' => $request->input('en_name'),
            'ar_details' => $request->input('ar_details'),
            'en_details' => $request->input('en_details'),

            'ar_title_Up' => $request->input('ar_details'),
            'en_title_Up' => $request->input('en_details'),
            'ar_title_down' => $request->input('ar_details'),
            'en_title_down' => $request->input('en_details'),
            'icon_url' => $fileNameIcon,
            'img_url' => $fileNameimgs,
            
        ]);

        return redirect()->route('admin.delivery.index');

    }

    public function edit($id){

        $shipments =  $this->dileveryModel::find($id);
        return view('Dashboard.dilevery.edit' , compact('shipments'));
    }

    public function update(Request $request){


     $dilevery =  $this->dileveryModel::find($request-> shipmentId);


        if( $dilevery != null){

        if($request->file('icons') != null ){
        
         File::delete( public_path('Dashboard\img\delivery\\'.$dilevery->icon_url));

              $fileNameIcon = time() . uniqid() . '.' . $request->file('icons')->getClientOriginalExtension();
              $request->file('icons')->move(public_path('Dashboard\img\delivery'), $fileNameIcon) ;

              $dilevery-> icon_url =  $fileNameIcon ;
            

        }

        if($request->file('imgs') != null){
          

           File::delete( public_path('Dashboard\img\delivery\\'.$dilevery-> img_url));
          
            $fileNameimgs = time() . uniqid() . '.' . $request->file('imgs')->getClientOriginalExtension();
        
            $result =   $request->file('imgs')->move(public_path('Dashboard\img\delivery'), $fileNameimgs) ;
        
            $dilevery-> img_url = $fileNameimgs ;
           
         }

       $date = $request->validated();
       $dilevery->update($date);
       
       return redirect()->route('admin.delivery.index');

        }

        return redirect()->back()->with('errors' ,'This request is out of the event'); 
       
    }

    public function destroy( $id){

        $dilevery =  $this->dileveryModel::find($id);

        File::delete( public_path('Dashboard\img\delivery\\'.$dilevery-> img_url));
        File::delete( public_path('Dashboard\img\delivery\\'.$dilevery-> icon_url));

        $dilevery->delete();

        return redirect()->back();
    }


    public function activated(Request $request){
        
      $result =  $this->dileveryModel::all();
     
      
      $select = $result->first();

      if($request-> is_active == '0'){

        $update = $result->find($request->id) ;
        $update-> is_active_limit = $request->is_active;
       
        $update->save();
        return redirect()->back() ;
      }

      if($request->is_active == '1'){

        //$select-> view_row  ( view_row column Can be expanded or decreased)
      if(count($result->where('is_active_limit',1)) < $select-> view_row ){
        $update = $result->find($request->id) ;
        $update-> is_active_limit = $request->is_active;
       
        $update->save();
        return redirect()->back() ;
      }

    }
      return redirect()->back()->with('success' ,'You have exceeded the permissible limit'); 
     
    }
    // Settings activated  display item weclome-section  limited just Two show required (activatedII -> (II)  number 2 language Latin ) 
    public function activatedII(Request $request)
    {
        $result =  $this->dileveryModel::all();
     
      
       
  
        if($request-> is_active_section == '0'){
  
          $update = $result->find($request->id) ;
          $update-> is_active_section = $request-> is_active_section;
         
          $update->save();
          return redirect()->back() ;
        }

        if($request->is_active_section == '1'){

            //$select-> view_row  ( view_row column Can be expanded or decreased)
          if(count($result->where('is_active_section',1)) < 2 ){
            $update = $result->find($request->id) ;
            $update-> is_active_section = $request->is_active_section;
           
            $update->save();
            return redirect()->back() ;

          }
    
        }
        return redirect()->back()->with('IsActiveSection' ,'It is not possible to activate more than two items Please deactivate an item and try again');
    }

    // Settings  record view page
    public function record(){

        $select = $this->dileveryModel->select('view_row')->first();

        return view('Dashboard.dilevery.records')->with('select' , $select->view_row);

    }

 // Settings display count records operation update (is column view_row by defualt = 4)
    public function records(Request $Count){

        $paresInt = (int)$Count->view_row;

       if(gettype($paresInt) =='integer'){

        $this->dileveryModel::where('view_row', '=', $Count->oldview)
        ->update(['view_row' => $Count->view_row]);
        return redirect()->back()->with('success' ,'update successfully'); 
       }
       return redirect()->back()->with('success' ,'Confirm that you have entered the correct data'); 
        
    }


}