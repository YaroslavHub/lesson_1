<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('images')->insert(
            [
                [
                  'url' => '/images/citten.jpg',
                  'filename' => '/public/images/citten.jpg'
                ],

                [
                   'url' => '/images/glasses.jpg',
                   'filename' => '/public/images/glasses.jpg'
                ]
            ]
          );
    }
}
