<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Comment extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo("App\Models\User");  
    }
    
    protected $fillable = [
    'content',
    'article_id',
    'user_id', // Ensure this is here!
    ];

}
