<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication_Image extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function p_images()
    {
        return $this->belongsTo(Publication::class,'publication_id','id');
    }
}
