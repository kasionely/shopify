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
//        $this->call(UsersTableSeeder::class);
        \App\Model\Admin::create([
            'email' => 'kasainov@gmail.com',
            'password' => Hash::make('159753')
        ]);
    }
}
