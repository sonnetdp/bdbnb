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
        $user->address = 'Dhaka';
        $user->contact = '+8801711934691';
        $user->national_id = '191912124545878';
        $user->passport_id = 'V5017895';
        $user->password = bcrypt('admin123');
        $user->save();

        $user = new User;
        $user->name = 'Manager';
        $user->email = 'manager@admin.com';
        $user->role = 2;
        $user->address = 'Dhaka';
        $user->contact = '+8801711420420';
        $user->national_id = '1232132132132';
        $user->passport_id = 'Z5017895';
        $user->password = bcrypt('admin123');
        $user->save();
    }
}
