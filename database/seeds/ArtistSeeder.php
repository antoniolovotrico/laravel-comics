<?php

use App\Artist;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $newArtist = new App\Artist();
            $newArtist->name = $faker->name();
            $newArtist->save();
        }
    }
}
