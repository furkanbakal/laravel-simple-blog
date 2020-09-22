<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name'=>'Furkan Bakal',
            'email'=>'f.bakal1997@gmail.com',
            'password'=>bcrypt(6551126),
            ]);
    }
}
