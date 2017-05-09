<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class CompaniesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('companies')->insert(array(
			'id' => 1,
			'company_name' => 'Sociedad Inmobiliaria y Comercial Uno Salud Spa.',
			'rut' => '76.110.227-3',
			'address' => 'Coyancura 2229, locales 6 y 7, Providencia',
			'phone' => '27639100',
			'email' => 'proveedores@unosalud.com'
			));
	}
}
