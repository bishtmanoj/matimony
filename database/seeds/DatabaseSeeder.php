<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CastesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(EducationTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(MaritalStatusesTableSeeder::class);
        $this->call(ReligionsTableSeeder::class);
        $this->call(ManglikTableSeeder::class);
    }
}
