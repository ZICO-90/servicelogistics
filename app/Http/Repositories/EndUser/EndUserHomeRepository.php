<?php
namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\EndUserHomeInterface;
use App\Models\DeliveryType;
use App\Models\SWelcomeTitle;
use App\Models\employe;

class EndUserHomeRepository implements EndUserHomeInterface
{
    private $dileveryModel;
    private $employeModel;
    private $sectionModel;

public function __construct(DeliveryType $delivery , SWelcomeTitle $section , employe $employe){
    $this->dileveryModel  =  $delivery ;
    $this->sectionModel  =  $section ;
    $this->employeModel  =  $employe ;
}


    public function homePage()
    {
      $logistics =  $this->dileveryModel::where('is_active_limit' , 1)->get();
      $Welcome =  $this->dileveryModel::where('is_active_section' , 1)->get();
      $sectionTitle =   $this->sectionModel::where('is_active' , 1)->first();
      $employe =   $this->employeModel::where('is_active' , 1)->first();


        return view('endUser.index',compact('logistics','sectionTitle','Welcome' ,'employe'));
    }

    public function masterPage(){

      
        return view('endUser.layouts.master',compact('logistics')) ;
    
    }
}
