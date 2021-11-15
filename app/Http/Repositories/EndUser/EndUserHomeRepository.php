<?php
namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\EndUserHomeInterface;
use App\Http\Traits\InfoSiteTrait;
use App\Models\InfoSite;

class EndUserHomeRepository implements EndUserHomeInterface
{
    use InfoSiteTrait;
    private $infoSiteModel;

    public function __construct(InfoSite $infoSite)
    {
        $this->infoSiteModel = $infoSite;
    }

    public function homePage()
    {
        $infos = $this->show_all_info();
        return view('endUser.index', compact('infos'));
    }
}
