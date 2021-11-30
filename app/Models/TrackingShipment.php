<?php

namespace App\Models;
use Spatie\Translatable\HasTranslations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackingShipment extends Model
{
    use HasFactory;
    use HasTranslations;


protected $fillable =['tracking_stage_id','customer_id','entering_date','outcomming_date','location_now',];
    public $translatable = ['desc'];
}
