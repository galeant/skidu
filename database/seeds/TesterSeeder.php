<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'momo',
            'email' => 'admin@mail.com',
            'password' => md5('admin'),
            'token' => str_random(50),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'last_login' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s')
        ]);//
    }
}
