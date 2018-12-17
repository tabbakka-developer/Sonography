<?php

use Illuminate\Database\Seeder;

class AdminSeed extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
        \Illuminate\Support\Facades\DB::table('users')->insert([
			'name' => 'Admin',
	        'email' => 'admin@sonography.ru',
	        'password' => 'Qwerty123'
        ]);
	}
}
