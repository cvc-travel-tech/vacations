<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        Model::unguard();

        DB::table('admins')->insert([
            'name' => Str::random(10),
            'email' =>  'admin@admin.com',
            'password' => bcrypt('password'),
        ]);
    }
}
