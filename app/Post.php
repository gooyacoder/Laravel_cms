<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'content'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function scopeDescending($query){
        return $query->latest()->get();
    }

    public function scopeAscending($query){
        return $query->get();
    }
}
