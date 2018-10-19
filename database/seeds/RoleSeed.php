<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    public function run()
    {
        DB::table((new Role)->getTable())->truncate();

        Role::insert([
            [
                'id'    => 1,
                'title' => 'Administrator (can create other users)',
            ],
            [
                'id'    => 2,
                'title' => 'Patient',
            ],
            [
                'id'    => 3,
                'title' => 'Family Member',
            ],
        ]);
    }
}
