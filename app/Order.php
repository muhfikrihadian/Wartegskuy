<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'id', 'no_meja', 'id_user', 'keterangan', 'status_order',
    ];
}
