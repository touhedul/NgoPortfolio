<?php

use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Job;
use App\Models\Team;
use App\Models\Testimonial;
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
        $this->call(AdminSeeder::class);
        $this->call(ProgramSeeder::class);
        $this->call(BlogSeeder::class);
        factory(Gallery::class, 20)->create();
        factory(Team::class, 20)->create();
        factory(Testimonial::class, 20)->create();
        factory(Job::class, 20)->create();
        // $this->call(UserSeeder::class);
        // $this->call(ContactFeedbackSeeder::class);
    }
}