<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PublishersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$publishers = [
    		[

    			'name' => "Cipta Kreasi",
    			'address' => "Palmerah, Jakarta - Indonesia",
    			'phone' => "02110101289",
    			'email' => "ck.palmerah@ciptakreasi.co.id",
    			'image' => "https://media.istockphoto.com/id/1210697453/vector/abstract-minimal-geometric-circle-background-for-business-annual-report-book-cover-brochure.jpg?s=612x612&w=0&k=20&c=5Yhekz26zg6xS6u-LDB5Mt5NHbtS1NTOinza2qksE1I=",
    		],
    		[

    			'name' => "Gramedia",
    			'address' => "Condet, Jakarta - Indonesia",
    			'phone' => "02132324545",
    			'email' => "penerbit@gramedia.id",
    			'image' => "https://media.istockphoto.com/id/1210697453/vector/abstract-minimal-geometric-circle-background-for-business-annual-report-book-cover-brochure.jpg?s=612x612&w=0&k=20&c=5Yhekz26zg6xS6u-LDB5Mt5NHbtS1NTOinza2qksE1I=",
    		],
    		[

    			'name' => "Erlangga",
    			'address' => "Soreang, Bandung - Indonesia",
    			'phone' => "0214444567",
    			'email' => "erlangga@penerbit.co.id",
    			'image' => "https://media.istockphoto.com/id/1210697453/vector/abstract-minimal-geometric-circle-background-for-business-annual-report-book-cover-brochure.jpg?s=612x612&w=0&k=20&c=5Yhekz26zg6xS6u-LDB5Mt5NHbtS1NTOinza2qksE1I=",
    		],
    	];
    	\DB::table('publishers')->insert($publishers);
    }
}
