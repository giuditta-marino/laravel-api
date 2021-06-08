<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Postcard;

class PostcardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10; $i++) {
        $postcard = new Postcard();

        $postcard->title = $faker->word();
        $postcard->content = $faker->text();

        $postcard->save();
      }
    }
}
