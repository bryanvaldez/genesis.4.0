<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Genesis\Entities\User;
use Genesis\Entities\Employee;

class EmployeeTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 100) as $index)
		{
			$firstName = $faker->firstName;
			$lastName  = $faker->lastName; 

			$user = User::create([
				'name'		=>$firstName,
				'last_name' =>$lastName,
				'email'		=>$faker->email,
				'password'	=>Hash::make(123456),
				'type'		=>'user'
			]);
			Employee::create([
				'id'		=>$user->id,
				'website_url'	=>$faker->url,
				'description'	=>$faker->text(100),
				'job_type'		=>$faker->randomElement(['full','partial','freelance']),
				'category_id'	=>$faker->randomElement([1,2,3]),			
				'available'		=>true,
				'slug'			=>Str::slug($firstName . $lastName)


			]);
		}
	}

}