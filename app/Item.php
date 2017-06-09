<?php

namespace oca;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //

    public function order()
    {
    	# code...
    	return $this->belongsTo('oca\Order');
    }
}
