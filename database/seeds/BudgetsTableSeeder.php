<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class BudgetsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('budgets')->insert(array(
			'id' => 1,
			'department_id' => 1,
			'begins' => '2017-01-03',
			'ends' => '2017-12-30'
			));

		\DB::table('budgets')->insert(array(
			'id' => 2,
			'department_id' => 2,
			'begins' => '2017-01-03',
			'ends' => '2017-12-30'
			));

		\DB::table('budgets')->insert(array(
			'id' => 3,
			'department_id' => 3,
			'begins' => '2017-01-03',
			'ends' => '2017-12-30'
			));

		\DB::table('budgets')->insert(array(
			'id' => 4,
			'department_id' => 4,
			'begins' => '2017-01-03',
			'ends' => '2017-12-30'
			));

		\DB::table('budgets')->insert(array(
			'id' => 5,
			'department_id' => 5,
			'begins' => '2017-01-03',
			'ends' => '2017-12-30'
			));

		\DB::table('budgets')->insert(array(
			'id' => 6,
			'department_id' => 6,
			'begins' => '2017-01-03',
			'ends' => '2017-12-30'
			));

		\DB::table('budgets')->insert(array(
			'id' => 7,
			'department_id' => 7,
			'begins' => '2017-01-03',
			'ends' => '2017-12-30'
			));

		\DB::table('budgets')->insert(array(
			'id' => 8,
			'department_id' => 8,
			'begins' => '2017-01-03',
			'ends' => '2017-12-30'
			));

		\DB::table('budgets')->insert(array(
			'id' => 9,
			'department_id' => 9,
			'begins' => '2017-01-03',
			'ends' => '2017-12-30'
			));

		\DB::table('budgets')->insert(array(
			'id' => 10,
			'department_id' => 10,
			'begins' => '2017-01-03',
			'ends' => '2017-12-30'
			));

		\DB::table('budgets')->insert(array(
			'id' => 11,
			'department_id' => 11,
			'begins' => '2017-01-03',
			'ends' => '2017-12-30'
			));
	}
}
