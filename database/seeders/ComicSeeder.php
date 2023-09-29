<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comicsData = require base_path('resources/data/comics.php');
        foreach ($comicsData as $comic) {
            $newComic = new Comic();

            $newComic->title = $comic["title"];
            $newComic->description = $comic["description"];
            $newComic->thumb = $comic["thumb"];
            $newComic->price = str_replace("$", "", $comic["price"]);
            $newComic->series = $comic["series"];
            $newComic->sale_date = $comic["sale_date"];
            $newComic->type = $comic["type"];
            $newComic->artists = json_encode($comic["artists"]);
            $newComic->writers = json_encode($comic["writers"]);

            $newComic->save();
        }
    }
}
