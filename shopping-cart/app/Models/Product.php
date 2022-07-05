<?php

namespace App\Models;

use Faker\Core\File;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['img', 'title', 'discription', 'price'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
