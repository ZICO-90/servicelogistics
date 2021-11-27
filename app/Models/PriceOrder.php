<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceOrder extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'address','kind','message','is_read'];
}
