<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailOrder extends Model
{
    protected $fillable = [
        'id', 'id_order', 'id_masakan', 'keterangan',
    ];
    public function masakan(){
    	return $this->belongsTo('App\Masakan','id_masakan','id');
    }
}
