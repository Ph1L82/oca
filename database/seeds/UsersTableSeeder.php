<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('users')->insert(array(
			'id' => 1,
			'name' => 'Ph1L',
			'email' => 'eduardo.rodriguez.bahamonde@gmail.com',
			'password' => \Hash::make('Ph1L4ns3lm0'),
			'department_id' => 1,
			'role' => 'admin',
			'api_token' => null
			));

		\DB::table('users')->insert(array(
			'id' => 2,
			'name' => 'Eduardo Javier Alejandro Rodríguez Bahamonde',
			'email' => 'erodriguez@unosalud.com',
			'password' => \Hash::make('Un0Saluder'),
			'department_id' => 1,
			'role' => 'firmante',
			'api_token' => null
			));

		\DB::table('users')->insert(array(
			'id' => 3,
			'name' => 'Juan Pablo Fuentes Acevedo',
			'email' => 'jpfuentes@unosalud.com',
			'password' => \Hash::make('Un0Saludjp'),
			'department_id' => 1,
			'role' => 'usuario',
			'api_token' => null
			));

		\DB::table('users')->insert(array(
			'id' => 4,
			'name' => 'Italo Fuentes Basualto',
			'email' => 'ifuentes@unosalud.com',
			'password' => \Hash::make('Un0Saludif'),
			'department_id' => 1,
			'role' => 'usuario',
			'api_token' => null
			));
	}
}
