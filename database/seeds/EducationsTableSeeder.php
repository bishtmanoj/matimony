<?php

use Illuminate\Database\Seeder;
use App\Education;

class EducationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Education::truncate();
        $educations = [
            ['name' => 'Less Than High School'],
            ['name' => 'High School'],
            ['name' => '10+2'],
            ['name' => 'Diploma in ITI'],
            ['name' => 'Diploma in AMIE'],
            ['name' => 'Bachelors in Arts'],
            ['name' => 'Bachelors in Science'],
            ['name' => 'Bachelors in Commerce'],
            ['name' => 'Bachelors In Computers'],
            ['name' => 'Bachelors in Engineering'],
            ['name' => 'Bachelors in Education'],
            ['name' => 'Bachelors in Technology'],
            ['name' => 'Masters in Arts'],
            ['name' => 'Masters in Science'],
            ['name' => 'Masters in Commerce'],
            ['name' => 'Masters in Computers'],
            ['name' => 'Masters in Engineering'],
            ['name' => 'Masters in Education'],
            ['name' => 'Masters in Technology'],
            ['name' => 'Management BBA'],
            ['name' => 'Management MBA'],
            ['name' => 'Management Other'],
            ['name' => 'Legal (Law) BL'],
            ['name' => 'Legal (Law) ML'],
            ['name' => 'Legal (Law) LLB'],
            ['name' => 'Legal (Law) other'],
            ['name' => 'Medicine'],
            ['name' => 'General'],
            ['name' => 'Dental'],
            ['name' => 'Surgeon'],
            ['name' => 'Other'],
            ['name' => 'ACA'],
            ['name' => 'FCA'],
            ['name' => 'Chartered Accountant'],
            ['name' => 'Company Secretary'],
            ['name' => 'ICWA'],
            ['name' => 'PhD'],
            ['name' => 'Public Service - IAS'],
            ['name' => 'Public Service - IPS'],
            ['name' => 'Public Service - Other'],
            ['name' => 'Other'],
        ];

        foreach($educations as $education){
        Education::create($education);
        }
    }
}
