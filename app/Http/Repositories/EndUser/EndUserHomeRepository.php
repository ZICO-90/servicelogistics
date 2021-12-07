<?php
namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\EndUserHomeInterface;

use App\Models\DeliveryType;
use App\Models\SWelcomeTitle;
use App\Models\employe;
use App\Http\Traits\InfoSiteTrait;
use App\Models\InfoSite;
use App\Models\latest_news;
use App\models\convention;

class EndUserHomeRepository implements EndUserHomeInterface
{
    use InfoSiteTrait;
    private $infoSiteModel;
    private $dileveryModel;
    private $employeModel;
    private $sectionModel;
    private $latest_newsModel;
    private $convention;

    public function __construct(InfoSite $infoSite, DeliveryType $delivery , SWelcomeTitle $section ,
            employe $employe ,latest_news $latest_news ,convention $convention)
    {
        $this->infoSiteModel = $infoSite;
        $this->dileveryModel  =  $delivery ;
        $this->sectionModel  =  $section ;
        $this->employeModel  =  $employe ;
        $this->latest_newsModel = $latest_news;
        $this->convention = $convention;
    }

    public function homePage()
    {
        $infos = $this->show_all_info();
        $logistics =  $this->dileveryModel::where('is_active_limit' , 1)->get();
        $Welcome =  $this->dileveryModel::where('is_active_section' , 1)->get();
        $sectionTitle =   $this->sectionModel::where('is_active' , 1)->first();
        $employe =   $this->employeModel::where('is_active' , 1)->first();
        $news = $this->latest_newsModel::Where('is_active' , 1)->latest()->first();
        $convention =$this->convention::Where('is_active' , 1)->latest()->first();
        return view('endUser.index', compact('infos','logistics','sectionTitle','Welcome' ,'employe' ,'news' ,'convention'));

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
