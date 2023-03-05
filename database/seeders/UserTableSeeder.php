<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin->name = 'Admin';
        $admin->email = 'admin@satas';
        $admin->password = Hash::make('12345678');
        $admin->save();
        $admin->roles()->attach(Role::where('name', 'admin')->first());

        $user = new User;
        $user->name = 'User';
        $user->email = 'user@satas';
        $user->password = Hash::make('12345678');
        $user->save();
        $user->roles()->attach(Role::where('name', 'user')->first());
    }
}