<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
        	[
        		'publisher_id' => 2,
        		'title' => "Mencari Cinta Sejati",
        		'author' => "Angga Bima",
        		'year' => "2009",
        		'synopsis' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
    			'image' => "https://media.istockphoto.com/id/1210697453/vector/abstract-minimal-geometric-circle-background-for-business-annual-report-book-cover-brochure.jpg?s=612x612&w=0&k=20&c=5Yhekz26zg6xS6u-LDB5Mt5NHbtS1NTOinza2qksE1I=",
        	],
        	[
        		'publisher_id' => 2,
        		'title' => "Ayat Ayat Cinta",
        		'author' => "Hanung Brahman Tio",
        		'year' => "2011",
        		'synopsis' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
    			'image' => "https://media.istockphoto.com/id/1210697453/vector/abstract-minimal-geometric-circle-background-for-business-annual-report-book-cover-brochure.jpg?s=612x612&w=0&k=20&c=5Yhekz26zg6xS6u-LDB5Mt5NHbtS1NTOinza2qksE1I=",
        	],
        	[
        		'publisher_id' => 1,
        		'title' => "Cinta Brontos Saurus",
        		'author' => "Raditya Dika",
        		'year' => "2015",
        		'synopsis' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
    			'image' => "https://media.istockphoto.com/id/1210697453/vector/abstract-minimal-geometric-circle-background-for-business-annual-report-book-cover-brochure.jpg?s=612x612&w=0&k=20&c=5Yhekz26zg6xS6u-LDB5Mt5NHbtS1NTOinza2qksE1I=",
        	],
        	[
        		'publisher_id' => 3,
        		'title' => "Manusia Setengah Salmon",
        		'author' => "Raditya Dika",
        		'year' => "2014",
        		'synopsis' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
    			'image' => "https://media.istockphoto.com/id/1210697453/vector/abstract-minimal-geometric-circle-background-for-business-annual-report-book-cover-brochure.jpg?s=612x612&w=0&k=20&c=5Yhekz26zg6xS6u-LDB5Mt5NHbtS1NTOinza2qksE1I=",
        	],
        ];        
    	\DB::table('books')->insert($books);
    }
}
