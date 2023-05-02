<?php

namespace Database\Seeders;

 use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\Listings;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        
        //   \App\Models\User::factory(5)->create();

        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
           
        ]);
          Listings::factory(9)->create([
            'user_id' => $user->id
          ]);
          

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Post::factory(100)->create();
        // Listings::create([
        //     'user_id' => $user->id,
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'this is sawo this is sawo this is sawo this is sawo this is sawo this is sawo this is sawo this is sawo this is sawo this is sawo',
        // ]);
        // Listings::create([
        //     'user_id' => $user->id,
            
        //     'title' => 'Full-Stack Engineer',
        //     'tags' => 'laravel, backend, api',
        //     'company' => 'Stark Industries',
        //     'location' => 'New York, NY',
        //     'email' => 'email@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'this is sawo this is sawo this is sawo this is sawo this is sawo this is sawo this is sawo this is sawo this is sawo this is sawo',
        // ]);
        // Listings::create([
        //     'user_id' => $user->id,
        //     'title' => 'Backend Laravel Dev',
        //     'tags' => 'laravel, backend, api',
        //     'company' => 'Stark Industries',
        //     'location' => 'New York, NY',
        //     'email' => 'email@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'this is sawo this is sawo this is sawo this is sawo this is sawo this is sawo this is sawo this is sawo this is sawo this is sawo',
        // ]);
        // Listings::create([
        //     'user_id' => $user->id,
        //     'title' => 'Frontend Engineer',
        //     'tags' => 'laravel, backend, api',
        //     'company' => 'Stark Industries',
        //     'location' => 'New York, NY',
        //     'email' => 'email@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'this is sawo this is sawo this is sawo this is sawo this is sawo this is sawo this is sawo this is sawo this is sawo this is sawo',
        // ]);
        // Listings::create([
        //     'user_id' => $user->id,
        //     'title' => 'UX/UI Engineer',
        //     'tags' => 'laravel, backend, api',
        //     'company' => 'Stark Industries',
        //     'location' => 'New York, NY',
        //     'email' => 'email@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'this is sawo this is sawo this is sawo this is sawo this is sawo this is sawo this is sawo this is sawo this is sawo this is sawo',
        // ]);
        // Listings::create([
        //     'user_id' => $user->id,
        //     'title' => 'Social Media Engineer',
        //     'tags' => 'laravel, backend, api',
        //     'company' => 'Stark Industries',
        //     'location' => 'New York, NY',
        //     'email' => 'email@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'this is sawo this is sawo this is sawo this is sawo this is sawo this is sawo this is sawo this is sawo this is sawo this is sawo',
        // ]);
        
    }
}
