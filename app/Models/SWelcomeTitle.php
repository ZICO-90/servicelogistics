<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SWelcomeTitle extends Model
{
    use HasFactory;
    protected $table = 's_welcome_titles';
    protected $fillable = [
        'ar_title_p',
        'en_title_p',
        'ar_title_h' ,
        'en_title_h',
        'ar_title_span',
        'en_title_span'];
}
