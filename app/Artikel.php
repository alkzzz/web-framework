<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikel';

    protected $fillable = [
        'user_id', 'judul', 'isi'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function komentar()
    {
        return $this->hasMany('App\Komentar');
    }
}
