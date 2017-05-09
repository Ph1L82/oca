<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class AccountsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('accounts')->insert([
			'id' => 1,
			'code' => 420101,
			'name' => 'Remuneraciones',
			'type' => 'gasto'
		]);

		DB::table('accounts')->insert([
			'id' => 2,
			'code' => 420106,
			'name' => 'Capacitacion al Personal',
			'type' => 'gasto'
		]);

		DB::table('accounts')->insert([
			'id' => 3,
			'code' => 420401,
			'name' => 'Consumo Telefono',
			'type' => 'gasto'
		]);

		DB::table('accounts')->insert([
			'id' => 4,
			'code' => 420402,
			'name' => 'Consumo Celular',
			'type' => 'gasto'
		]);

		DB::table('accounts')->insert([
			'id' => 5,
			'code' => 420403,
			'name' => 'Consumo Internet',
			'type' => 'gasto'
		]);

		DB::table('accounts')->insert([
			'id' => 6,
			'code' => 420504,
			'name' => 'Mantención equipos informaticos',
			'type' => 'gasto'
		]);

		DB::table('accounts')->insert([
			'id' => 7,
			'code' => 420704,
			'name' => 'Correo Privado',
			'type' => 'gasto'
		]);

		DB::table('accounts')->insert([
			'id' => 8,
			'code' => 420705,
			'name' => 'Viajes',
			'type' => 'gasto'
		]);

		DB::table('accounts')->insert([
			'id' => 9,
			'code' => 420714,
			'name' => 'Alimentos y Bebidas',
			'type' => 'gasto'
		]);

		DB::table('accounts')->insert([
			'id' => 10,
			'code' => 420720,
			'name' => 'Peajes y Estacionamientos',
			'type' => 'gasto'
		]);

		DB::table('accounts')->insert([
			'id' => 11,
			'code' => 420722,
			'name' => 'Gastos Varios',
			'type' => 'gasto'
		]);

		DB::table('accounts')->insert([
			'id' => 12,
			'code' => 420723,
			'name' => 'Locomocion, Taxis, Metro y carga BIP',
			'type' => 'gasto'
		]);

		DB::table('accounts')->insert([
			'id' => 13,
			'code' => 420725,
			'name' => 'Insumos y Equipos Computacionales',
			'type' => 'gasto'
		]);

		DB::table('accounts')->insert([
			'id' => 14,
			'code' => 420726,
			'name' => 'Fotocopias e Impresiones',
			'type' => 'gasto'
		]);

		DB::table('accounts')->insert([
			'id' => 15,
			'code' => 420730,
			'name' => 'Fletes',
			'type' => 'gasto'
		]);

		DB::table('accounts')->insert([
			'id' => 16,
			'code' => 420734,
			'name' => 'Alojamiento - Estadía',
			'type' => 'gasto'
		]);

		DB::table('accounts')->insert([
			'id' => 17,
			'code' => 421101,
			'name' => 'Arriendo de Software Dental',
			'type' => 'gasto'
		]);

		DB::table('accounts')->insert([
			'id' => 18,
			'code' => 421102,
			'name' => 'Arriendo de Software Comercial',
			'type' => 'gasto'
		]);

		DB::table('accounts')->insert([
			'id' => 19,
			'code' => 421103,
			'name' => 'Software y Gastos WEB',
			'type' => 'gasto'
		]);

		DB::table('accounts')->insert([
			'id' => 20,
			'code' => 421104,
			'name' => 'Soporte Informatico',
			'type' => 'gasto'
		]);

		DB::table('accounts')->insert([
			'id' => 21,
			'code' => 421105,
			'name' => 'Consultoria Informatica',
			'type' => 'gasto'
		]);

		DB::table('accounts')->insert([
			'id' => 22,
			'code' => 421106,
			'name' => 'Infraestructura y Servidores',
			'type' => 'gasto'
		]);

		DB::table('accounts')->insert([
			'id' => 23,
			'code' => 120303,
			'name' => 'Equipos Informaticos Habilitacion Clinicas Nuevas',
			'type' => 'activo fijo'
		]);

		DB::table('accounts')->insert([
			'id' => 24,
			'code' => 120304,
			'name' => 'Renovacion equipos Informaticos',
			'type' => 'activo fijo'
		]);

		DB::table('accounts')->insert([
			'id' => 25,
			'code' => 120305,
			'name' => 'Equipos Informaticos Proyectos de Inversion',
			'type' => 'activo fijo'
		]);
	}
}
