<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
require_once 'vendor/autoload.php';

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Faker\Provider\Youtube($faker));
        for ($i=0; $i < 10; $i++) {
            $postData = [
                "title" => $faker->sentence(10),
                "description" => $faker->sentence(20),
                "author" => $faker->name(),
                "date" => $faker->date(),
                "body" => $body = $faker->paragraph(20),
                "video" => $faker->youtubeUri(),
                "image" => $faker->imageUrl(640, 480, 'book', true),
                "count" => mt_rand(1, 5),
                "latest" => $faker->dateTime()
            ];
            //<50 kata maka cepat, dan seterusnya
            if (str_word_count($body) < 50 ) {
                $postData["category_id"] = 1;
            } elseif (str_word_count($body) > 50 && str_word_count($body) < 200){
                $postData["category_id"] = 2;
            } else{
                $postData["category_id"] = 3;
            }

            Post::create($postData);

        }
    }
}
