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
//    public static function all() {
//        return File::files(resource_path("products/{$slug}.html"));
//    }
//
//    public static function findOrFail($slug) {
//        if (!file_exists($path = resource_path("products/{$slug}.html")))  {
//            throw new ModelNotFoundException();
//        }
//
//        return cache()->remember("products.{$slug}", 1200, fn() => file_get_contents($path));
//    }

}
