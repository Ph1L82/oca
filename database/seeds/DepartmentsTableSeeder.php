<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DepartmentsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('departments')->insert(array(
			'id' => 1,
			'name' => 'Tecnologías de Información',
			'company_id' => 1
			));

		\DB::table('departments')->insert(array(
			'id' => 2,
			'name' => 'Abastecimiento',
			'company_id' => 1
			));

		\DB::table('departments')->insert(array(
			'id' => 3,
			'name' => 'Calidad y Acreditación',
			'company_id' => 1
			));

		\DB::table('departments')->insert(array(
			'id' => 4,
			'name' => 'Clínica',
			'company_id' => 1
			));

		\DB::table('departments')->insert(array(
			'id' => 5,
			'name' => 'Contabilidad',
			'company_id' => 1
			));

		\DB::table('departments')->insert(array(
			'id' => 6,
			'name' => 'Tesorería',
			'company_id' => 1
			));

		\DB::table('departments')->insert(array(
			'id' => 7,
			'name' => 'Control de Gestión',
			'company_id' => 1
			));

		\DB::table('departments')->insert(array(
			'id' => 8,
			'name' => 'Convenio y Producto',
			'company_id' => 1
			));

		\DB::table('departments')->insert(array(
			'id' => 9,
			'name' => 'Marketing',
			'company_id' => 1
			));

		\DB::table('departments')->insert(array(
			'id' => 10,
			'name' => 'Operaciones',
			'company_id' => 1
			));

		\DB::table('departments')->insert(array(
			'id' => 11,
			'name' => 'Recursos Humanos',
			'company_id' => 1
			));
	}
}
