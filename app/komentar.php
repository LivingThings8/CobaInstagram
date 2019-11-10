<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class komentar extends Model
{
    protected $table = "komentar_post";
    protected $fillable = [
        'id', 'user_id', 'post_id', 'comment', 'create_at', 'update_at',
    ];

    public function post() {
        return $this -> belongsTo('App\post');
    }

    public function user() {
        return $this -> belongsTo('App\User');
    }
}
