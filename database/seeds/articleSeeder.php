<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class articleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=0; $i<=10 ; $i++)
        {
            $title_org = $faker->realText($maxNbChars = 200, $indexSize = 2);
            DB::table('articles')->insert([
                'title'     => $title_org,
                'slug'      => str_slug($title_org),
                'cat'       => rand(1, 6),
                'image'     => $faker->imageUrl($width = 640, $height = 100),
                'content'   => $faker->paragraph($nbSentences = 8, $variableNbSentences = true),
                'created_at'=> $faker->date($format = 'Y-m-d', $max = 'now'),
                'updated_at'=> now()
            ]);
        }
    }
}
