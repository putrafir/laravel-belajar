<?php

namespace Database\Seeders;

use App\Models\Categories;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {



        User::factory(3)->create();


        Categories::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Categories::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain'
        ]);
 
        Categories::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();



        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Firdaus',
        //     'email' => 'firdaus@gmail.com',
        //     'password' => bcrypt('Firdaus123')
        // ]);
        // User::create([
        //     'name' => 'Sindy',
        //     'email' => 'sindy@gmail.com',
        //     'password' => bcrypt('Sindy123')
        // ]);


        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'orem, ipsum dolor sit amet ketiga',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ut suscipit minima perspiciatis eligendi cupiditate ab fugit exercitationem recusandae quos, laborum reiciendis doloribus impedit quaerat sunt quod quis? Laborum dolorum at enim, et soluta alias hic quas! Odio, voluptatum voluptatibus? Debitis numquam quaerat porro quae quo amet, necessitatibus suscipit aliquam consequatur obcaecati voluptate eligendi ipsa repellendus sunt asperiores saepe expedita aspernatur facilis nam hic enim ducimus quia! Mollitia et similique voluptas autem minus, excepturi ab. Nulla culpa fugiat dignissimos, quas asperiores nostrum, eveniet necessitatibus blanditiis a molestias cupiditate rem pariatur nemo eligendi non aliquam voluptatibus. Doloribus soluta ab at iure.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod rerum veniam dignissimos aut odio rem praesentium iusto vel adipisci consectetur. Sit ipsum totam modi officiis, commodi dolorum nulla amet, distinctio aliquid voluptate corporis voluptates magni molestiae veritatis omnis repellendus odit! Nisi cum fugit reprehenderit, odit quos nam in commodi eligendi nesciunt animi a sapiente consequuntur. Fugiat aliquid doloremque explicabo quas rem! Amet eum blanditiis tempore laudantium exercitationem cumque eius? Autem eius nihil explicabo a perspiciatis, cumque aliquam delectus nisi, odit cum veniam reiciendis sequi facilis. Fugit, possimus voluptatem autem distinctio, beatae repudiandae facilis temporibus quia pariatur, nostrum laborum sint in sapiente aliquid? Facere consequuntur ratione mollitia dolores aut natus repellat asperiores laborum labore illo sunt, quibusdam odio hic deserunt non.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, nostrum! Aliquid, explicabo eligendi eaque culpa ipsam sed excepturi cupiditate corrupti libero numquam atque distinctio. Dolore ratione sint, repellat esse obcaecati impedit velit maxime distinctio doloribus deserunt consequuntur culpa tenetur voluptatum. Rem, sed eum hic sapiente fugiat excepturi. Officiis quos et eligendi voluptatibus dolores, veniam, ipsum voluptas a, odio labore dolore assumenda rerum cumque maxime culpa! Nemo, minus earum ea libero cupiditate adipisci quam? Reiciendis perferendis ipsum repudiandae mollitia dolore dolorum, autem velit, perspiciatis rem optio aperiam totam. Dolores, iusto error! At numquam minima deserunt hic dolore accusantium? Architecto, accusamus cumque!',
        //     'categories_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'orem, ipsum dolor sit amet ketiga',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ut suscipit minima perspiciatis eligendi cupiditate ab fugit exercitationem recusandae quos, laborum reiciendis doloribus impedit quaerat sunt quod quis? Laborum dolorum at enim, et soluta alias hic quas! Odio, voluptatum voluptatibus? Debitis numquam quaerat porro quae quo amet, necessitatibus suscipit aliquam consequatur obcaecati voluptate eligendi ipsa repellendus sunt asperiores saepe expedita aspernatur facilis nam hic enim ducimus quia! Mollitia et similique voluptas autem minus, excepturi ab. Nulla culpa fugiat dignissimos, quas asperiores nostrum, eveniet necessitatibus blanditiis a molestias cupiditate rem pariatur nemo eligendi non aliquam voluptatibus. Doloribus soluta ab at iure.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod rerum veniam dignissimos aut odio rem praesentium iusto vel adipisci consectetur. Sit ipsum totam modi officiis, commodi dolorum nulla amet, distinctio aliquid voluptate corporis voluptates magni molestiae veritatis omnis repellendus odit! Nisi cum fugit reprehenderit, odit quos nam in commodi eligendi nesciunt animi a sapiente consequuntur. Fugiat aliquid doloremque explicabo quas rem! Amet eum blanditiis tempore laudantium exercitationem cumque eius? Autem eius nihil explicabo a perspiciatis, cumque aliquam delectus nisi, odit cum veniam reiciendis sequi facilis. Fugit, possimus voluptatem autem distinctio, beatae repudiandae facilis temporibus quia pariatur, nostrum laborum sint in sapiente aliquid? Facere consequuntur ratione mollitia dolores aut natus repellat asperiores laborum labore illo sunt, quibusdam odio hic deserunt non.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, nostrum! Aliquid, explicabo eligendi eaque culpa ipsam sed excepturi cupiditate corrupti libero numquam atque distinctio. Dolore ratione sint, repellat esse obcaecati impedit velit maxime distinctio doloribus deserunt consequuntur culpa tenetur voluptatum. Rem, sed eum hic sapiente fugiat excepturi. Officiis quos et eligendi voluptatibus dolores, veniam, ipsum voluptas a, odio labore dolore assumenda rerum cumque maxime culpa! Nemo, minus earum ea libero cupiditate adipisci quam? Reiciendis perferendis ipsum repudiandae mollitia dolore dolorum, autem velit, perspiciatis rem optio aperiam totam. Dolores, iusto error! At numquam minima deserunt hic dolore accusantium? Architecto, accusamus cumque!',
        //     'categories_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'orem, ipsum dolor sit amet ketiga',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ut suscipit minima perspiciatis eligendi cupiditate ab fugit exercitationem recusandae quos, laborum reiciendis doloribus impedit quaerat sunt quod quis? Laborum dolorum at enim, et soluta alias hic quas! Odio, voluptatum voluptatibus? Debitis numquam quaerat porro quae quo amet, necessitatibus suscipit aliquam consequatur obcaecati voluptate eligendi ipsa repellendus sunt asperiores saepe expedita aspernatur facilis nam hic enim ducimus quia! Mollitia et similique voluptas autem minus, excepturi ab. Nulla culpa fugiat dignissimos, quas asperiores nostrum, eveniet necessitatibus blanditiis a molestias cupiditate rem pariatur nemo eligendi non aliquam voluptatibus. Doloribus soluta ab at iure.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod rerum veniam dignissimos aut odio rem praesentium iusto vel adipisci consectetur. Sit ipsum totam modi officiis, commodi dolorum nulla amet, distinctio aliquid voluptate corporis voluptates magni molestiae veritatis omnis repellendus odit! Nisi cum fugit reprehenderit, odit quos nam in commodi eligendi nesciunt animi a sapiente consequuntur. Fugiat aliquid doloremque explicabo quas rem! Amet eum blanditiis tempore laudantium exercitationem cumque eius? Autem eius nihil explicabo a perspiciatis, cumque aliquam delectus nisi, odit cum veniam reiciendis sequi facilis. Fugit, possimus voluptatem autem distinctio, beatae repudiandae facilis temporibus quia pariatur, nostrum laborum sint in sapiente aliquid? Facere consequuntur ratione mollitia dolores aut natus repellat asperiores laborum labore illo sunt, quibusdam odio hic deserunt non.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, nostrum! Aliquid, explicabo eligendi eaque culpa ipsam sed excepturi cupiditate corrupti libero numquam atque distinctio. Dolore ratione sint, repellat esse obcaecati impedit velit maxime distinctio doloribus deserunt consequuntur culpa tenetur voluptatum. Rem, sed eum hic sapiente fugiat excepturi. Officiis quos et eligendi voluptatibus dolores, veniam, ipsum voluptas a, odio labore dolore assumenda rerum cumque maxime culpa! Nemo, minus earum ea libero cupiditate adipisci quam? Reiciendis perferendis ipsum repudiandae mollitia dolore dolorum, autem velit, perspiciatis rem optio aperiam totam. Dolores, iusto error! At numquam minima deserunt hic dolore accusantium? Architecto, accusamus cumque!',
        //     'categories_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'orem, ipsum dolor sit amet ketiga',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ut suscipit minima perspiciatis eligendi cupiditate ab fugit exercitationem recusandae quos, laborum reiciendis doloribus impedit quaerat sunt quod quis? Laborum dolorum at enim, et soluta alias hic quas! Odio, voluptatum voluptatibus? Debitis numquam quaerat porro quae quo amet, necessitatibus suscipit aliquam consequatur obcaecati voluptate eligendi ipsa repellendus sunt asperiores saepe expedita aspernatur facilis nam hic enim ducimus quia! Mollitia et similique voluptas autem minus, excepturi ab. Nulla culpa fugiat dignissimos, quas asperiores nostrum, eveniet necessitatibus blanditiis a molestias cupiditate rem pariatur nemo eligendi non aliquam voluptatibus. Doloribus soluta ab at iure.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod rerum veniam dignissimos aut odio rem praesentium iusto vel adipisci consectetur. Sit ipsum totam modi officiis, commodi dolorum nulla amet, distinctio aliquid voluptate corporis voluptates magni molestiae veritatis omnis repellendus odit! Nisi cum fugit reprehenderit, odit quos nam in commodi eligendi nesciunt animi a sapiente consequuntur. Fugiat aliquid doloremque explicabo quas rem! Amet eum blanditiis tempore laudantium exercitationem cumque eius? Autem eius nihil explicabo a perspiciatis, cumque aliquam delectus nisi, odit cum veniam reiciendis sequi facilis. Fugit, possimus voluptatem autem distinctio, beatae repudiandae facilis temporibus quia pariatur, nostrum laborum sint in sapiente aliquid? Facere consequuntur ratione mollitia dolores aut natus repellat asperiores laborum labore illo sunt, quibusdam odio hic deserunt non.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, nostrum! Aliquid, explicabo eligendi eaque culpa ipsam sed excepturi cupiditate corrupti libero numquam atque distinctio. Dolore ratione sint, repellat esse obcaecati impedit velit maxime distinctio doloribus deserunt consequuntur culpa tenetur voluptatum. Rem, sed eum hic sapiente fugiat excepturi. Officiis quos et eligendi voluptatibus dolores, veniam, ipsum voluptas a, odio labore dolore assumenda rerum cumque maxime culpa! Nemo, minus earum ea libero cupiditate adipisci quam? Reiciendis perferendis ipsum repudiandae mollitia dolore dolorum, autem velit, perspiciatis rem optio aperiam totam. Dolores, iusto error! At numquam minima deserunt hic dolore accusantium? Architecto, accusamus cumque!',
        //     'categories_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
