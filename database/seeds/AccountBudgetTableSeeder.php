<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class AccountBudgetTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('account__budget')->insert(array(
			'id' =>	1,
			'account_id' => 1,
			'budget_id' =>	1,
			'assigned' =>	73100000,
			'balance'	=>	73100000
			));

		\DB::table('account__budget')->insert(array(
			'id' =>	2,
			'account_id' => 2,
			'budget_id' =>	1,
			'assigned' =>	3904328.12,
			'balance'	=>	3904328.12
			));

		\DB::table('account__budget')->insert(array(
			'id' =>	3,
			'account_id' => 3,
			'budget_id' =>	1,
			'assigned' 	=>	25814297.87,
			'balance'	=>	25814297.87
			));

		\DB::table('account__budget')->insert(array(
			'id' =>	4,
			'account_id' => 4,
			'budget_id' =>	1,
			'assigned' =>	2304000,
			'balance'	=>	2304000
			));

		\DB::table('account__budget')->insert(array(
			'id' =>	5,
			'account_id' => 5,
			'budget_id' =>	1,
			'assigned' =>	19440000,
			'balance'	=>	19440000
			));

		\DB::table('account__budget')->insert(array(
			'id' =>	6,
			'account_id' => 6,
			'budget_id' =>	1,
			'assigned' =>	2800000,
			'balance'	=>	2800000
			));

		\DB::table('account__budget')->insert(array(
			'id' =>	7,
			'account_id' => 7,
			'budget_id' =>	1,
			'assigned' =>	0,
			'balance'	=>	0
			));

		\DB::table('account__budget')->insert(array(
			'id' =>	8,
			'account_id' => 8,
			'budget_id' =>	1,
			'assigned' =>	2400000,
			'balance'	=>	2400000
			));

		\DB::table('account__budget')->insert(array(
			'id' =>	9,
			'account_id' => 9,
			'budget_id' =>	1,
			'assigned' =>	1200000,
			'balance'	=>	1200000
			));

		\DB::table('account__budget')->insert(array(
			'id' =>	10,
			'account_id' => 10,
			'budget_id' =>	1,
			'assigned' =>	0,
			'balance'	=>	0
			));

		\DB::table('account__budget')->insert(array(
			'id' =>	11,
			'account_id' => 11,
			'budget_id' =>	1,
			'assigned' =>	2400000,
			'balance'	=>	2400000
			));

		\DB::table('account__budget')->insert(array(
			'id' =>	12,
			'account_id' => 12,
			'budget_id' =>	1,
			'assigned' =>	1155000,
			'balance'	=>	1155000
			));

		\DB::table('account__budget')->insert(array(
			'id' =>	13,
			'account_id' => 13,
			'budget_id' =>	1,
			'assigned' =>	0,
			'balance'	=>	0
			));

		\DB::table('account__budget')->insert(array(
			'id' =>	14,
			'account_id' => 14,
			'budget_id' =>	1,
			'assigned' =>	44598600,
			'balance'	=>	44598600
			));

		\DB::table('account__budget')->insert(array(
			'id' =>	15,
			'account_id' => 15,
			'budget_id' =>	1,
			'assigned' =>	11971200,
			'balance'	=>	11971200
			));

		\DB::table('account__budget')->insert(array(
			'id' =>	16,
			'account_id' => 16,
			'budget_id' =>	1,
			'assigned' =>	1800000,
			'balance'	=>	1800000
			));

		\DB::table('account__budget')->insert(array(
			'id' =>	17,
			'account_id' => 17,
			'budget_id' =>	1,
			'assigned' =>	66209400,
			'balance'	=>	66209400
			));

		\DB::table('account__budget')->insert(array(
			'id' =>	18,
			'account_id' => 18,
			'budget_id' =>	1,
			'assigned' =>	17989000,
			'balance'	=>	17989000
			));

		\DB::table('account__budget')->insert(array(
			'id' =>	19,
			'account_id' => 19,
			'budget_id' =>	1,
			'assigned' =>	82035100,
			'balance'	=>	82035100
			));

		\DB::table('account__budget')->insert(array(
			'id' =>	20,
			'account_id' => 20,
			'budget_id' =>	1,
			'assigned' =>	68688000,
			'balance'	=>	68688000
			));

		\DB::table('account__budget')->insert(array(
			'id' =>	21,
			'account_id' => 21,
			'budget_id' =>	1,
			'assigned' =>	0,
			'balance'	=>	0
			));

		\DB::table('account__budget')->insert(array(
			'id' =>	22,
			'account_id' => 22,
			'budget_id' =>	1,
			'assigned' =>	123671868.15,
			'balance'	=>	123671868.15
			));

		\DB::table('account__budget')->insert(array(
			'id' =>	23,
			'account_id' => 23,
			'budget_id' =>	1,
			'assigned' =>	252748000,
			'balance'	=>	252748000
			));

		\DB::table('account__budget')->insert(array(
			'id' =>	24,
			'account_id' => 24,
			'budget_id' =>	1,
			'assigned' =>	11272000,
			'balance'	=>	11272000
			));

		\DB::table('account__budget')->insert(array(
			'id' =>	25,
			'account_id' => 25,
			'budget_id' =>	1,
			'assigned' =>	27138970,
			'balance'	=>	27138970
			));
	}
}
