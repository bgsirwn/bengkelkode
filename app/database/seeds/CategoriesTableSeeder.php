<?php

class CategoriesTableSeeder extends Seeder{
	
	public function run(){
		DB::table('categories')->delete();
		$data = [
			['name'	=>	'php'],
			['name'	=>	'mysql'],
			['name'	=>	'laravel'],
			['name'	=>	'c#'],
			['name'	=>	'c++'],
			['name'	=>	'java'],
			['name'	=>	'phyton'],
			['name'	=>	'android'],
			['name'	=>	'unity'],
			['name'	=>	'libgdx'],
			['name'	=>	'matlab'],
		];

		DB::table('categories')->insert($data);
	}

}