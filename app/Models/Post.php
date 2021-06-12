<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table='posts';
    protected $guarded = [];

    public function profile()
    {
        return $this->belongsTo(\App\Models\Profile::class, 'profile_id','id');
    }
}
