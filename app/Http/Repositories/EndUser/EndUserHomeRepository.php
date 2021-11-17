<?php
namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\EndUserHomeInterface;

use App\Models\DeliveryType;
use App\Models\SWelcomeTitle;
use App\Models\employe;
use App\Http\Traits\InfoSiteTrait;
use App\Models\InfoSite;

class EndUserHomeRepository implements EndUserHomeInterface
{
    use InfoSiteTrait;
    private $infoSiteModel;
    private $dileveryModel;
    private $employeModel;
    private $sectionModel;

    public function __construct(InfoSite $infoSite, DeliveryType $delivery , SWelcomeTitle $section , employe $employe)
    {
        $this->infoSiteModel = $infoSite;
        $this->dileveryModel  =  $delivery ;
        $this->sectionModel  =  $section ;
        $this->employeModel  =  $employe ;
    }

    public function homePage()
    {
        $infos = $this->show_all_info();
        $logistics =  $this->dileveryModel::where('is_active_limit' , 1)->get();
        $Welcome =  $this->dileveryModel::where('is_active_section' , 1)->get();
        $sectionTitle =   $this->sectionModel::where('is_active' , 1)->first();
        $employe =   $this->employeModel::where('is_active' , 1)->first();
        return view('endUser.index', compact('infos','logistics','sectionTitle','Welcome' ,'employe'));

    }


   public function masterPage(){

      
        return view('endUser.layouts.master',compact('logistics')) ;
    }
}
