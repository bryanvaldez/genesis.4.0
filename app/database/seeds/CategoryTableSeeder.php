<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Genesis\Entities\Category;

class CategoryTableSeeder extends Seeder {

	public function run()
	{
		Category::create([
			'id' 	=> 1,
			'name'	=> 'Senior Analyst Developer',
			'slug'  => 'senior-analyst-developer'
			]);
		Category::create([
			'id'	=> 2,
			'name'	=> 'Functional Analyst', 
			'slug'	=> 'functional-analyst'
			]);
		Category::create([
			'id'	=> 3,
			'name'	=> 'Document',
			'slug'	=> 'document'
			]);
	}

}