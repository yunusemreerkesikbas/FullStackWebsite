<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;
    protected $fillable = [
        'site_name',
        'site_description',
        'instagram',
        'facebook',
        'twitter',
        'linkedin',
        'tel_no',
        'wp_no',
        'email',
        'address',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'cover_image',
    ];
}
