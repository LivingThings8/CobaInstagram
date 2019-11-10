<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = "post";
    protected $fillable = [
        'id', 'user_id', 'caption', 'image', 'likes', 'created_at', 'updated_at',
    ];

    public function comment() {
        return $this->hasMany('App\komentar');
    }

    public function users() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
