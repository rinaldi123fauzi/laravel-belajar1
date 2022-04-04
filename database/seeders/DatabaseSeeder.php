<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => "rinaldi.fauzi",
            'email' => 'rinaldi@ma.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Blog::create([
            'title' => "Judul Pertama",
            'slug' => 'judul-pertama',
            'excerpt' => 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to 
                          demonstrate the visual form of a document or a typeface without relying on meaningful content. 
                          Lorem ipsum may be used as a placeholder before the final copy is available.',
            'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys 
                       standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it 
                       to make a type specimen book. It has survived not only five centuries, but also the leap into electronic 
                       typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
                       sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus 
                       PageMaker including versions of Lorem Ipsum.', 
            'category_id' => 1,
            'user_id' => 1
        ]);
        Blog::create([
            'title' => "Judul Ke Dua",
            'slug' => 'judul-ke-dua',
            'excerpt' => 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to 
                          demonstrate the visual form of a document or a typeface without relying on meaningful content. 
                          Lorem ipsum may be used as a placeholder before the final copy is available.',
            'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys 
                       standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it 
                       to make a type specimen book. It has survived not only five centuries, but also the leap into electronic 
                       typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
                       sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus 
                       PageMaker including versions of Lorem Ipsum.', 
            'category_id' => 2,
            'user_id' => 1
        ]);
    }
}
