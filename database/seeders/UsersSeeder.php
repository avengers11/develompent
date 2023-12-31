<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Str;
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
        $user=new User;
        $user->assignRole("admin");
        $user->name = "Admin";
        $user->email = "admin@gmail.com";
        $user->status = "active";
        $user->group = "admin";
        $user->job_role = 'Happy Person';
        $user->referral_id = strtoupper(Str::random(15));
        $user->password = Hash::make("12345678");
        $user->save();

        $user=new User;
        $user->assignRole("user");
        $user->name = "User";
        $user->email = "user@gmail.com";
        $user->status = "active";
        $user->group = "user";
        $user->job_role = 'Happy Person';
        $user->referral_id = strtoupper(Str::random(15));
        $user->password = Hash::make("12345678");
        $user->save();
    }
}
