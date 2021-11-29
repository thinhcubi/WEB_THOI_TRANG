<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "thinh";
        $user->email = "thinhcubi27@gmail.com";
        $user->role = 1;
        $user->password = Hash::make('123456');
        $user->save();

        $user = new User();
        $user->name = "hai";
        $user->email = "hai12@gmail.com";
        $user->role = 2;
        $user->password = Hash::make('123456');
        $user->save();

        $user = new User();
        $user->name = "thanh";
        $user->email = "thanhlc@gmail.com";
        $user->role = 3;
        $user->password = Hash::make('1234567');
        $user->save();

    }
}
