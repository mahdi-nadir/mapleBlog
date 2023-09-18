<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Country;
use App\Models\Diploma;
use App\Models\Gender;
use App\Models\ImgPost;
use App\Models\ImgUser;
use App\Models\Message;
use App\Models\Noc;
use App\Models\Post;
use App\Models\Role;
use App\Models\Step;
use App\Models\System;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            ImgUserSeeder::class,
            RoleSeeder::class,
            GenderSeeder::class,
            SystemSeeder::class,
            DiplomaSeeder::class,
            StepSeeder::class,
            NocSeeder::class,
        ]);

        // Role::factory()->create(['type' => 'admin']);
        // Role::factory()->create(['type' => 'user']);

        // Gender::factory()->create(['name' => 'male']);
        // Gender::factory()->create(['name' => 'female']);

        // System::factory()->create(['name' => 'Arrima']);
        // System::factory()->create(['name' => 'Express Entry']);

        // Diploma::factory()->create(['level' => 'Baccalauréat']);
        // Diploma::factory()->create(['level' => 'Master']);
        // Diploma::factory()->create(['level' => 'PhD']);

        // Step::factory()->create(['name' => 'Pre-ITA']);
        // Step::factory()->create(['name' => 'ITA']);
        // Step::factory()->create(['name' => 'Post-ITA']);
        // Step::factory()->create(['name' => 'Post-AOR']);
        // Step::factory()->create(['name' => 'PPR']);
        // Step::factory()->create(['name' => 'post-COPR']);
        // Step::factory()->create(['name' => 'landing']);
        // Step::factory()->create(['name' => 'citizenship']);

        // ImgUser::factory()->create(['path' => 'https://dummyimage.com/600x400/000/fff']);
        // ImgUser::factory()->create(['path' => 'https://dummyimage.com/600x400/555/fff']);
        // ImgUser::factory()->create(['path' => 'https://dummyimage.com/600x400/999/fff']);

        // Country::factory(20)->create();

        // Noc::factory(20)->create();
        // NocSeeder::class;

        // Category::factory()->create(['name' => 'immigration']);
        // Category::factory()->create(['name' => 'job']);
        // Category::factory()->create(['name' => 'housing']);
        // Category::factory()->create(['name' => 'process']);

        User::factory(5)->create();



        // ImgPost::factory()->create(['path' => 'https://dummyimage.com/600x400/fff/000']);
        // ImgPost::factory()->create(['path' => 'https://dummyimage.com/600x400/fff/555']);
        // ImgPost::factory()->create(['path' => 'https://dummyimage.com/600x400/fff/999']);

        Post::factory(5)->create();
        Comment::factory(5)->create();

        Message::factory(5)->create();
    }
}
