<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Shipment extends Model implements TranslatableContract
{
    use Translatable;

    // 3. To define which attributes needs to be translated
    public $translatedAttributes =
        ['shipment_name',];
    protected $fillable = ['amount', 'unit_id','whieght','price',
        'currency_id', 'address_address','sender_date','expected_recived_date',
        'address_latitude',
        'address_longitude',

        'type_id','costumer_id'];


protected $guarded=[];

public function customers(){
    return $this->belongsTo(Customer::class,'costumer_id');
}
}
