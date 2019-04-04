<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Admin';
        $user->email = 'super@admin.com';
        $user->role = 1;
        $user->password = bcrypt('admin123');
        $user->save();

        $user = new User;
        $user->name = 'Manager';
        $user->email = 'manager@admin.com';
        $user->role = 2;
        $user->password = bcrypt('admin123');
        $user->save();
    }
}
