<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    public $dirctory = "/images/";
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'content', 'path'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function scopeDescending($query){
        return $query->latest()->get();
    }

    public function scopeAscending($query){
        return $query->get();
    }

    public function getPathAttribute($value){
        return $this->dirctory . $value;
    }
}
