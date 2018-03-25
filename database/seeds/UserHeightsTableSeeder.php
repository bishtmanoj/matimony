<?php

use Illuminate\Database\Seeder;
use App\UserHeight;

class UserHeightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserHeight::truncate();
        $heights = [
            ['name' => "5' 0\""],
            ['name' => "5' 1\""],
            ['name' => "5' 2\""],
            ['name' => "5' 3\""],
            ['name' => "5' 4\""],
            ['name' => "5' 5\""],
            ['name' => "5' 6\""],
            ['name' => "5' 7\""],
            ['name' => "5' 8\""],
            ['name' => "5' 9\""],
            ['name' => "5' 10\""],
            ['name' => "5' 11\""],
            ['name' => "5' 12\""],
            ['name' => "6' 0\""],
            ['name' => "6' 1\""],
            ['name' => "6' 2\""],
            ['name' => "6' 3\""],
            ['name' => "6' 4\""],
            ['name' => "6' 5\""],
            ['name' => "6' 6\""],
        ];

        foreach($heights as $height):
            UserHeight::create($height);
        endforeach;
    }
}
