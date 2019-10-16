<?php

use Illuminate\Database\Seeder;

class UserInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\Illuminate\Support\Facades\DB::table('userinfo')->insert([
    		'fullname'=>'hung',
    		'address'=>'hai phong',
    		'user_id'=>201,
    		'created_at'=>\Carbon\Carbon::now(),
    		'updated_at'=>\Carbon\Carbon::now()
    	]);
    	// $faker = \Faker\Factory::create();
    	// for ($i = 0 ; $i < 50; $i++){
    	// 	\DB::table('userinfo')->insert([
    	// 		'address' => $faker->text(20),
    	// 		'fullname'  => $faker->text(20),
    	// 		'user_id' => 201,
    	// 		'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
    	// 		'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),

    	// 	]);
    	// }
    }
}
