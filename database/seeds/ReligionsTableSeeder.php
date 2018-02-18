<?php

use Illuminate\Database\Seeder;
use App\Religion;

class ReligionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Religion::truncate();
        $religions = [
            ['slug' => 'hindu', 'name' => 'Hindu'],
            ['slug' => 'muslim', 'name' => 'Muslim'],
            ['slug' => 'christian', 'name' => 'Christian'],
            ['slug' => 'sikh', 'name' => 'Sikh'],
            ['slug' => 'parsi', 'name' => 'Parsi'],
            ['slug' => 'jain', 'name' => 'Jain'],
            ['slug' => 'buddhist', 'name' => 'Buddhist'],
            ['slug' => 'jewish', 'name' => 'Jewish'],
            ['slug' => 'spiritual', 'name' => 'Spiritual'],
            ['slug' => 'other', 'name' => 'Other'],
        ];
        foreach($religions as $religion){
        Religion::create($religion);
        }
    }
}
