<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerIklan extends Model
{
    use HasFactory;
    protected $table = 'banner_iklan';
    protected $fillable = [
        'link_iklan','gambar','tampilkan',
    ];
}
