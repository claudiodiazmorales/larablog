<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS =0;');
        Post::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS =1;');

        for ($i=0; $i < 30; $i++) { 
            $c = Category::inRandomOrder()->first();

            $title = Str::random(5);

            $titulo = "$title $title";

            Post::create([
                'title' => $titulo,
                'slug' => Str::slug($titulo),
                'content' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore inventore excepturi beatae sunt obcaecati molestias adipisci officia similique, laudantium, odit perspiciatis ipsam quia facilis consequatur? Quo facilis maiores aut pariatur!",
                'category_id' => $c->id,
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
                'posted' => 'yes'
            ]);

        }
    }
}
