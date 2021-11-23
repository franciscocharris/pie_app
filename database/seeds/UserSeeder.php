<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'document_type' => 'cc',
            'document' => '11115470345',
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => time(),
            'password' => bcrypt('12345'),
            'terms' => 1
        ])->assignRole('admin');
        // operador
        User::create([
            'document_type' => 'cc',
            'document' => '10555460345',
            'name' => 'tutor',
            'email' => 'tutor@gmail.com',
            'email_verified_at' => time(),
            'password' => bcrypt('12345'),
            'terms' => 1
        ])->assignRole('tutor');
        // // vendedor
        // User::create([
        //     'document_type' => 'cc',
        //     'document' => '10455470345',
        //     'name' => 'seller',
        //     'email' => 'seller@gmail.com',
        //     'email_verified_at' => time(),
        //     'password' => bcrypt('12345'),
        //     'terms' => 1
        // ])->assignRole('vendedor');
        // usuario
        User::create([
            'document_type' => 'cc',
            'document' => '10455470345',
            'name' => 'user',
            'email' => 'user@gmail.com',
            'email_verified_at' => time(),
            'password' => bcrypt('12345'),
            'terms' => 1
        ]);
    }
}
