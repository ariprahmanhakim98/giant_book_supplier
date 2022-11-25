<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book_category = [
        	[
        		'book_id' => 1,
        		'category_id' => 1,
        	],
        	[
        		'book_id' => 1,
        		'category_id' => 3,
        	],
        	[
        		'book_id' => 1,
        		'category_id' => 7,
        	],
        	[
        		'book_id' => 2,
        		'category_id' => 1,
        	],
        	[
        		'book_id' => 2,
        		'category_id' => 7,
        	],
        	[
        		'book_id' => 3,
        		'category_id' => 3,
        	],
        	[
        		'book_id' => 3,
        		'category_id' => 4,
        	],
        	[
        		'book_id' => 3,
        		'category_id' => 6,
        	],
        	[
        		'book_id' => 4,
        		'category_id' => 1,
        	],
        	[
        		'book_id' => 4,
        		'category_id' => 2,
        	],
        	[
        		'book_id' => 4,
        		'category_id' => 3,
        	],
        ];
    	\DB::table('book_category')->insert($book_category);
    }
}
