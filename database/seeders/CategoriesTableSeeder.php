<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$categories = [
    		[
    			'name' => "Romance"
    		],
    		[
    			'name' => "Horor"
    		],
    		[
    			'name' => "Comedy"
    		],
    		[
    			'name' => "Action"
    		],
    		[
    			'name' => "Fantasy"
    		],
    		[
    			'name' => "Documenter"
    		],
    		[
    			'name' => "Drama"
    		],
    	];
    	\DB::table('categories')->insert($categories);
    }
}
