<?php

namespace oca;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    //

    public function orders()
    {
    	# code...
    	return $this->belongsTo('oca\Order');
    }
}
