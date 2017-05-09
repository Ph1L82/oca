<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class PaymentMethodsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('payment__methods')->insert([
			'id' => 1,
			'name' => '30 días Cuenta Corriente'
			]);

		DB::table('payment__methods')->insert([
			'id' => 2,
			'name' => '3 cheques'
			]);

		DB::table('payment__methods')->insert([
			'id' => 3,
			'name' => '5 cheques'
			]);

		DB::table('payment__methods')->insert([
			'id' => 4,
			'name' => 'Cheque al día'
			]);

		DB::table('payment__methods')->insert([
			'id' => 5,
			'name' => 'Transferencia Cuenta Corriente'
			]);

		DB::table('payment__methods')->insert([
			'id' => 6,
			'name' => 'Efectivo'
			]);
	}
}
