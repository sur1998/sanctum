<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class loginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'leo',
            'email' => 'leo@mail.com',
            'password' =>Hash:: make('1234')
        ]);
       /* DB::table('users')->insert([
            'name' => 'gen',
            'email' => 'gen@mail.com',
            'password' =>Hash:: make('1234gen')
        ]);
        DB::table('users')->insert([
            'name' => 'virgo',
            'email' => '@maviril.com',
            'password' =>Hash:: make('12345#')
        ]);
        DB::table('users')->insert([
            'name' => 'mac',
            'email' => 'mac@mail.com',
            'password' =>Hash:: make('1234mac')
        ]);*/

    }
}
