<?php

namespace oca;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $table = 'budgets';

public function accountsBudget()
{
	return $this->hasMany('oca\Account_Budget', 'budget_id', 'id');
}

}