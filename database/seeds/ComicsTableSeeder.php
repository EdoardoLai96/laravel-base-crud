<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $comics = config('comics');

       foreach ($comics as $comic){

        $single_comic = new Comic();

        $single_comic->title = $comic['title'];
        $single_comic->description = $comic['description'];
        $single_comic->thumb = $comic['thumb'];
        $single_comic->price = $comic['price'];
        $single_comic->series = $comic['series'];
        $single_comic->sale_date = $comic['sale_date'];
        $single_comic->type = $comic['type'];

        $single_comic->save();
       }
    }
}
