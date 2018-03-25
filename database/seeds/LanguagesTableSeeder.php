<?php

use Illuminate\Database\Seeder;
use App\Language;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            ['name' => 'Hindi'],['name' => 'Himanchali']
        ];
        Language::truncate();
        foreach($languages as $language):
            Language::create($language);
        endforeach;
    }
}
