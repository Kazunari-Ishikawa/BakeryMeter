<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'  =>  'test taro',
            'email' =>  'test@example.com',
            'password'  =>  bcrypt('password'),
        ]);

        // factoryを使って生成
        factory(App\User::class, 10)->create();
    }
}
