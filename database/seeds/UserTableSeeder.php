<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('users')->insert([

            [
                'id' => 1,
                'name' => 'Martial',
                'email' => 'admin@admin.com',
                // 'email_verified_at' => 'admin@admin.com',
                'password' => 'password',
            ],
        ]);
    }
}
