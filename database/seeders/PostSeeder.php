<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'Test avec image',
            'content' => 'Contenu du post de test',
            'thumbnail' => 'https://www.adimeo.com/hubfs/rediger-des-articles-de-blog-qui-seront-lus.webp'
        ]);

        // Post::where('id', 1)->delete();
    }
}
