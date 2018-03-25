<?php

use Illuminate\Database\Seeder;
use App\ProfilePost;

class ProfilePostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProfilePost::truncate();
       $profile_posts = [
        ['name' => 'Self'], 
        ['name' => 'Son'], 
        ['name' => 'Daughter'], 
        ['name' => 'Brother'], 
        ['name' => 'Sister'], 
        ['name' => 'Friend'], 
        ['name' => 'Relative'] 
       ];

       foreach($profile_posts as $profile_post){
        ProfilePost::create($profile_post);
       }
    }
}