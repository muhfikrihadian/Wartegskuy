<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masakan extends Model
{
    protected $fillable = [
        'id', 'nama', 'harga', 'status_masakan',
    ];
}
