<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		User::create([
					'name' => 'tunglaso1',
					'role_id' => 1,
			]);
		User::create([
					'name' => 'cuonglaso2',
					'role_id' => 1,
			]);
	}

}