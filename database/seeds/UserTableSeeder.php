<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create([
            'name' => 'Taichung-Frontend',
            'email'=> 'tcf2e@website.com',
            'password' => bcrypt('tcf2eisawesome')
        ]);
    }

}