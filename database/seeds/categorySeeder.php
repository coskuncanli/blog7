<?php

use Illuminate\Database\Seeder;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Genel', 'Yazılım', 'Donanım', 'Genel Kültür', 'Mobil', 'Sosyal Medya'];

        foreach($categories as $c){
            DB::table('categories')->insert([
                'name' => $c,
                'slug' => str_slug($c)
            ]);
        }

       
    }
}
