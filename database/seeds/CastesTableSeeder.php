<?php

use Illuminate\Database\Seeder;
use App\Caste;

class CastesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Caste::truncate();
       $castes = [
            ['slug' => 'rana-obc', 'name' => 'Rana (OBC)'],
            ['slug' => 'kayasth', 'name' => 'Kayasth'],
            ['slug' => 'rajput', 'name' => 'Rajput'],
            ['slug' => 'brahmin', 'name' => 'Brahmin'],
            ['slug' => 'chaudhary-ghirth', 'name' => 'Chaudhary-Ghirth'],
            ['slug' => 'khatri', 'name' => 'Khatri'],
            ['slug' => 'chaudhary-bhati', 'name' => 'Chaudhary-Bhati'],
            ['slug' => 'sood', 'name' => 'Sood'],
            ['slug' => 'mahajan', 'name' => 'Mahajan'],
            ['slug' => 'sonar', 'name' => 'Sonar'],
            ['slug' => 'gupta', 'name' => 'Gupta'],
            ['slug' => 'soni', 'name' => 'Soni'],
            ['slug' => 'koli', 'name' => 'Koli'],
            ['slug' => 'kumhar', 'name' => 'Kumhar'],
            ['slug' => 'valmiki', 'name' => 'Valmiki'],
            ['slug' => 'kabir-panthi', 'name' => 'Kabir Panthi'],
            ['slug' => 'scheduled-caste', 'name' => 'Scheduled Caste'],
            ['slug' => 'gaddi', 'name' => 'Gaddi'],
            ['slug' => 'shippy', 'name' => 'Shippy'],
            ['slug' => 'batwal', 'name' => 'Batwal'],
            ['slug' => 'ramDasiya-sc', 'name' => 'RamDasiya-SC'],
            ['slug' => 'labana', 'name' => 'Labana'],
            ['slug' => 'dumana-sc', 'name' => 'Dumana-SC'],
            ['slug' => 'nath', 'name' => 'Nath'],
            ['slug' => 'jogi', 'name' => 'Jogi'],
            ['slug' => 'julaha', 'name' => 'Julaha'],
            ['slug' => 'chimmbe', 'name' => 'Chimmbe'],
            ['slug' => 'chamar', 'name' => 'Chamar'],
            ['slug' => 'dhiman', 'name' => 'Dhiman'],
            ['slug' => 'dhobi', 'name' => 'Dhobi'],
            ['slug' => 'lohar', 'name' => 'Lohar'],
            ['slug' => 'mehra', 'name' => 'Mehra'],
            ['slug' => 'ramdasia', 'name' => 'Ramdasia'],
            ['slug' => 'ravidasia', 'name' => 'Ravidasia'],
            ['slug' => 'prajapati', 'name' => 'Prajapati'],
            ['slug' => 'nai-barba', 'name' => 'Nai/Barba'],
            ['slug' => 'obc', 'name' => '(OBC)'],
            ['slug' => 'aggarwal', 'name' => 'Aggarwal'],
            ['slug' => 'arora', 'name' => 'Arora'],
            ['slug' => 'bhandari', 'name' => 'Bhandari'],
            ['slug' => 'scheduled Tribes', 'name' => 'Scheduled Tribes'],
            ['slug' => 'kashyap', 'name' => 'Kashyap'],
            ['slug' => 'gujjar', 'name' => 'Gujjar'],
            ['slug' => 'bhatia', 'name' => 'Bhatia'],
            ['slug' => 'jat', 'name' => 'Jat'],
            ['slug' => 'rawat', 'name' => 'Rawat'],
            ['slug' => 'jangam', 'name' => 'Jangam'],
            ['slug' => 'karuneegar', 'name' => 'Karuneegar'],
            ['slug' => 'saini', 'name' => 'Saini'],
            ['slug' => 'nayaka', 'name' => 'Nayaka'],
            ['slug' => 'yadava', 'name' => 'Yadava'],
            ['slug' => 'ghai', 'name' => 'Ghai'],
            ['slug' => 'walia', 'name' => 'Walia'],
            ['slug' => 'nepali', 'name' => 'Nepali'],
       ];

       foreach($castes as $caste){
        Caste::create($caste);
       }
    }
}