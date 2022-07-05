<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = ['img', 'title', 'discription', 'price'];

    public function user(){
        return $this->belongsTo('App\Models\user');
    }
}
