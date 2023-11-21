<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->insert([
            'name'=>'joao',
            'email'=>'joao@joao.pt',
            'password'=>bcrypt('atec+123'),
            'is_admin'=>1,
        ]);
    }
}
