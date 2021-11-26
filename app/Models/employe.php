<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employe extends Model
{
    use HasFactory;
      protected $fillable = [
       'ar_name',
        'en_name',

        'ar_Country',
        'en_Country',

        'ar_details',
        'en_details',

        'ar_city',
        'en_city',

        'birth_date',
        'phone',
        'email',
        'is_active',
        'img_url'


    ];


    protected $appends = ['age']; // return just age in column >  birth_date

    //get Years employe 
    public function getAgeAttribute(){

        return Carbon::parse(Carbon::now())->diffInYears($this->birth_date);
        
    }
}
