<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name' => 'John Paul Lim',
            'email' => 'johnpaul@gmail.com',
            'password' => bcrypt('password'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/1.png',
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus incidunt, quaerat? Ab at culpa eveniet explicabo incidunt ipsa laborum maxime, minus molestias omnis placeat quaerat sit sunt tempore unde voluptates.',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }

}


