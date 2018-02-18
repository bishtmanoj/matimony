<?php

use Illuminate\Database\Seeder;
use App\Manglik;

class ManglikTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Manglik::truncate();
        foreach([
            ['slug' => 'yes', 'name' => 'Yes'],
            ['slug' => 'no', 'name' => 'No'],
            ['slug' => 'anshik-manglik', 'name' => 'Anshik Manglik'],
            ['slug' => 'dont-know', 'name' => 'Dont Know'],
        ] as $manglik):

        Manglik::create($manglik);
        endforeach;
    }
}
