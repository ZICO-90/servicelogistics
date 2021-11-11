<?php
namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\EndUserHomeInterface;

class EndUserHomeRepository implements EndUserHomeInterface
{

    public function homePage()
    {
        return view('endUser.index');
    }
}
