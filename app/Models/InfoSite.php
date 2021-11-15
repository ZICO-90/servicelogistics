<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoSite extends Model
{
    use HasFactory;

    protected $fillable= [
        'en_title',
        'ar_title',
        'email',
        'logo',
        'phone',
        'ar_day',
        'en_day',
        'open_time',
        'close_time',
        'facebook_url',
        'twitter_url',
        'linkedin_url',
        'is_active'
    ];

    public static function rule()
    {
        return [
            'en_title' => 'required|string:min:3',
            'ar_title' => 'required|string:min:3',
            'phone' =>  'required|min:11',
            'email' => 'required|email',
            'ar_day' => 'required|string|min:3',
            'en_day' => 'required|string|min:3',
            'open_time' => 'required',
            'close_time' => 'required',
            'facebook_url' => 'required|url',
            'twitter_url' => 'required|url',
            'linkedin_url' => 'required|url'
        ];
    }
}
