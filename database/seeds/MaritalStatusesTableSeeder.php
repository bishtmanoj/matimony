<?php

use Illuminate\Database\Seeder;
use App\MaritalStatus;

class MaritalStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MaritalStatus::truncate();
        $maritalstatuses = [
            ['slug' => 'unmarried','name' => 'Unmarried'],
            ['slug' => 'widowed','name' => 'Widowed'],
            ['slug' => 'divorced','name' => 'Divorced'],
            ['slug' => 'separated','name' => 'Separated']
        ];
        foreach($maritalstatuses as $marital){
        MaritalStatus::create($marital);
        }
    }
}
