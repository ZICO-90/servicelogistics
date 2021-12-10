<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ServicesSection extends Model
{
    use HasFactory;
    use HasTranslations ;
    public $translatable = ['heading_title_top_P' , 'heading_title_H' , 'heading_title_bottom_P'];
    protected $fillable = [
        'heading_title_top_P',
        'heading_title_H',
        'heading_title_bottom_P'
 
           
    ];
}
