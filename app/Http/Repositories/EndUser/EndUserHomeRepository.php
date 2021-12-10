<?php
namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\EndUserHomeInterface;

use App\Models\DeliveryType;
use App\Models\SWelcomeTitle;
use App\Models\employe;
use App\Http\Traits\InfoSiteTrait;
use App\Models\InfoSite;
use App\Models\ServicesSection;
class EndUserHomeRepository implements EndUserHomeInterface
{
    use InfoSiteTrait;
    private $infoSiteModel;
    private $dileveryModel;
    private $employeModel;
    private $sectionModel;
    private $servicesSection;
    public function __construct(InfoSite $infoSite, DeliveryType $delivery ,
     SWelcomeTitle $section , employe $employe , ServicesSection $Servicesmodel)
    {
        $this->infoSiteModel = $infoSite;
        $this->dileveryModel  =  $delivery ;
        $this->sectionModel  =  $section ;
        $this->employeModel  =  $employe ;
        $this->servicesSection = $Servicesmodel;
    }

    public function homePage()
    {
        $infos = $this->show_all_info();
        $logistics =  $this->dileveryModel::where('is_active_limit' , 1)->get();
        $limit =   $logistics->first();
        
        $logisticslimit = $this->dileveryModel::skip(0)->take($limit->view_row)->get();

        $Welcome =  $this->dileveryModel::where('is_active_section' , 1)->get();
        $sectionTitle =   $this->sectionModel::where('is_active' , 1)->first();
        $employe =   $this->employeModel::where('is_active' , 1)->first();

        $ServicesSection =  $this->servicesSection::where('is_active' , 1)->first();
        return view('endUser.index', compact('infos','logistics','sectionTitle','Welcome' ,'employe' ,'logisticslimit' ,'ServicesSection'));

    }


    public function priceOrder()
    {
        return view('endUser.price-order');
    }

    public function testimonial()
    {
        return view('endUser.testimonial');
    }
}
