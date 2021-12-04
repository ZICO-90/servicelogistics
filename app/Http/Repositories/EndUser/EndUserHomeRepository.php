<?php
namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\EndUserHomeInterface;

use App\Http\Traits\TestimonialsTrait;
use App\Models\DeliveryType;
use App\Models\SWelcomeTitle;
use App\Models\employe;
use App\Http\Traits\InfoSiteTrait;
use App\Models\InfoSite;
use App\Models\Testimonial;

class EndUserHomeRepository implements EndUserHomeInterface
{
    use InfoSiteTrait;
    use TestimonialsTrait;
    private
            $infoSiteModel,
            $dileveryModel,
            $employeModel,
            $sectionModel,
            $testimonialModel;

    public function __construct(InfoSite $infoSite, DeliveryType $delivery , SWelcomeTitle $section , employe $employe, Testimonial $testimonial)
    {
        $this->infoSiteModel = $infoSite;
        $this->dileveryModel  =  $delivery ;
        $this->sectionModel  =  $section ;
        $this->employeModel  =  $employe ;
        $this->testimonialModel = $testimonial;
    }

    public function homePage()
    {
        $infos = $this->show_all_info();
        $logistics =  $this->dileveryModel::where('is_active_limit' , 1)->get();
        $Welcome =  $this->dileveryModel::where('is_active_section' , 1)->get();
        $sectionTitle =   $this->sectionModel::where('is_active' , 1)->first();
        $employe =   $this->employeModel::where('is_active' , 1)->first();
        $testimonials = $this->show_all_testimonials()->where('status', 1);
        return view('endUser.index', compact('infos','logistics','sectionTitle','Welcome' ,'employe', 'testimonials'));

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
