<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryType extends Model
{
    use HasFactory;

    protected $fillable = [
        'ar_name',
        'en_name',
        'ar_details',
        'en_details',
        'icon_url',
        'img_url',
        'ar_title_Up',
        'en_title_Up',
        'ar_title_down',
        'en_title_down'


       
    ];
}
