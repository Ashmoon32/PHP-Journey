<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    public function categroy() {
        // return $this->belongsTo('App\Models\Category');
        return $this->belongsTo(Category::class);
    }

    public function comments() {
        return $this->hasMany('App\Models\Comment');

    }
}
