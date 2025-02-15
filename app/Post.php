<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'category_id',
        'photo',
        'body'
    ];


    public function category(){
        return $this->belongsTo('App\Category','category_id');
    }
}
