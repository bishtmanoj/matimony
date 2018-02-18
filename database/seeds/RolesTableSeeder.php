<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        $roles = [
            [
            'slug' => 'admin',
            'name' => 'Admin'
            ],
            [
                'slug' => 'customer',
                'name' => 'Customer'
            ]
        ];
        foreach($roles as $role){
        Role::create($role);
        }
    }
}
