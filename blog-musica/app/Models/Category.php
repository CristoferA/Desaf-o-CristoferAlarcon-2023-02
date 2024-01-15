<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'title_song',
        'title_album',
        'year',
        'genre',
        'duration',
        'image',
        'song',
        'image_artist',
        'image_concert',
        'navbar_status',
        'status',
        'created_by',
    ];
}
