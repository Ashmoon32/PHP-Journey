<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    //
    use HasFactory; // 2. Use the trait inside the class
    
    // Optional: if you want to allow mass assignment
    protected $fillable = ['title', 'body', 'category_id'];
}
