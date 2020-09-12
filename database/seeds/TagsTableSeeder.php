<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $tags = [
        'sportiva',
        'berlina',
        'suv',
        'coupe',
      ];

      foreach ($tags as $tag) {
        $new_tag = new Tag();
        $new_tag->name = $tag;
        $new_tag->save();
      }
    }
}
