<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipmentAttachment extends Model
{
    use HasFactory;
    protected $fillable=['file_name','shipment_id'];
}
