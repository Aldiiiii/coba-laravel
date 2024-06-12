<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        User::create([
            'name' => 'Muhammad Rizki Amrinaldi',
            'username' => 'amrinaldi',
            'email' => 'amrinaldi@mail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Fauzi Firdaus',
        //     'email' => 'fauzi@mail.com',
        //     'password' => bcrypt('12345')
        // ]);
        
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex perferendis numquam error neque, dolore repellat.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex perferendis numquam error neque, dolore repellat. Ut vel cumque reiciendis minima sequi omnis iusto unde, ipsum, quod magni explicabo. Impedit optio placeat facere numquam rerum necessitatibus soluta eveniet ea, sint atque iste laborum, aliquam, possimus commodi ullam harum dolor minima vero nihil cum qui tenetur iusto quo. Consectetur numquam eveniet tempore quo tempora.</p> <p>audantium saepe dicta reiciendis expedita reprehenderit pariatur cupiditate, aperiam, atque iusto error provident nobis alias officiis odio illum voluptatem molestiae aut a soluta tempora mollitia ducimus. Aut fugiat fuga quasi! Laudantium saepe nesciunt sapiente rem iure? Reprehenderit, repellendus.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id debitis adipisci necessitatibus dolor minima beatae maxime fugit natus tempora velit nulla, soluta est at veniam? Vel cupiditate dolorem excepturi illo doloribus dolore nesciunt cumque necessitatibus nobis id dicta, debitis impedit ex veritatis tempore possimus eius. Nobis qui commodi debitis eveniet.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex perferendis numquam error neque, dolore repellat.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex perferendis numquam error neque, dolore repellat. Ut vel cumque reiciendis minima sequi omnis iusto unde, ipsum, quod magni explicabo. Impedit optio placeat facere numquam rerum necessitatibus soluta eveniet ea, sint atque iste laborum, aliquam, possimus commodi ullam harum dolor minima vero nihil cum qui tenetur iusto quo. Consectetur numquam eveniet tempore quo tempora.</p> <p>audantium saepe dicta reiciendis expedita reprehenderit pariatur cupiditate, aperiam, atque iusto error provident nobis alias officiis odio illum voluptatem molestiae aut a soluta tempora mollitia ducimus. Aut fugiat fuga quasi! Laudantium saepe nesciunt sapiente rem iure? Reprehenderit, repellendus.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id debitis adipisci necessitatibus dolor minima beatae maxime fugit natus tempora velit nulla, soluta est at veniam? Vel cupiditate dolorem excepturi illo doloribus dolore nesciunt cumque necessitatibus nobis id dicta, debitis impedit ex veritatis tempore possimus eius. Nobis qui commodi debitis eveniet.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex perferendis numquam error neque, dolore repellat.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex perferendis numquam error neque, dolore repellat. Ut vel cumque reiciendis minima sequi omnis iusto unde, ipsum, quod magni explicabo. Impedit optio placeat facere numquam rerum necessitatibus soluta eveniet ea, sint atque iste laborum, aliquam, possimus commodi ullam harum dolor minima vero nihil cum qui tenetur iusto quo. Consectetur numquam eveniet tempore quo tempora.</p> <p>audantium saepe dicta reiciendis expedita reprehenderit pariatur cupiditate, aperiam, atque iusto error provident nobis alias officiis odio illum voluptatem molestiae aut a soluta tempora mollitia ducimus. Aut fugiat fuga quasi! Laudantium saepe nesciunt sapiente rem iure? Reprehenderit, repellendus.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id debitis adipisci necessitatibus dolor minima beatae maxime fugit natus tempora velit nulla, soluta est at veniam? Vel cupiditate dolorem excepturi illo doloribus dolore nesciunt cumque necessitatibus nobis id dicta, debitis impedit ex veritatis tempore possimus eius. Nobis qui commodi debitis eveniet.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex perferendis numquam error neque, dolore repellat.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex perferendis numquam error neque, dolore repellat. Ut vel cumque reiciendis minima sequi omnis iusto unde, ipsum, quod magni explicabo. Impedit optio placeat facere numquam rerum necessitatibus soluta eveniet ea, sint atque iste laborum, aliquam, possimus commodi ullam harum dolor minima vero nihil cum qui tenetur iusto quo. Consectetur numquam eveniet tempore quo tempora.</p> <p>audantium saepe dicta reiciendis expedita reprehenderit pariatur cupiditate, aperiam, atque iusto error provident nobis alias officiis odio illum voluptatem molestiae aut a soluta tempora mollitia ducimus. Aut fugiat fuga quasi! Laudantium saepe nesciunt sapiente rem iure? Reprehenderit, repellendus.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id debitis adipisci necessitatibus dolor minima beatae maxime fugit natus tempora velit nulla, soluta est at veniam? Vel cupiditate dolorem excepturi illo doloribus dolore nesciunt cumque necessitatibus nobis id dicta, debitis impedit ex veritatis tempore possimus eius. Nobis qui commodi debitis eveniet.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
