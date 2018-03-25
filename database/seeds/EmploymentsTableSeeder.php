<?php

use Illuminate\Database\Seeder;
use App\Employment;

class EmploymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employment::truncate();

        $employments = [
            ['name' => 'Not working'],
            ['name' => 'Working'],
            ['name' => 'Self Employment']
        ];

        foreach($employments as $employment):
Employment::create($employment);
        endforeach;
    }
}
