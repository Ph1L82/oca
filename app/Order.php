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
        // return $this->hasOne('oca\Provider', 'id');
    	return $this->hasMany('oca\Provider', 'id', 'provider_id');
    }

    public function author()
    {
        # code...
        return $this->belongsTo('oca\User', 'author');
    }

    public function approved()
    {
        # code...
        return $this->belongsTo('oca\User', 'approved_by');
    }

    public function disapproved()
    {
    	# code...
    	return $this->belongsTo('oca\User', 'disapproved_by');
    }
}
