<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class latest_news extends Model
{
    use HasFactory;
    protected $fillable = [
        'ar_title',
        'en_title',
        'ar_content',
        'en_content',
        'photo'
    ];

   
}
