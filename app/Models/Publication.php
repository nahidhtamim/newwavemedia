<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $table = 'publications';

    protected $fillable = [
        'title',
        'image',
        'description_top',
        'description_bottom',
        'youtube_video',
        'link',
        'pdf',
        'slug',
    ];
}
