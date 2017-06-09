<?php

namespace oca;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //


    public function items()
    {
    	# code...
    	return $this->hasMany('oca\Item');
    }

    public function provider()
    {
    	# code...
    	return $this->hasOne('oca\Provider', 'id');
    }

    public function author()
    {
    	# code...
    	return $this->belongsTo('oca\User', 'author');
    }
}
