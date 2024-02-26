<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserController extends Controller
{
    //Задание 13.2 пункт 2
    public function addOneUser()
    {
        DB::table('users')->insert([
            'login' => 'user1',
            'password'  => Str::random(8),
            'email' => Str::random(8) . '@mail.ru'
        ]);

        $user = DB::table('users')->get();
        return view('user', ['user' => $user]);
    }

    //Задание 13.2 пункт 3
    public function addThreeUsers()
    {
        $user = DB::table('users')->insert([
            [
                'login' => 'user2',
                'password'  => Str::random(8),
                'email' => Str::random(8) . '@mail.ru'
            ],
            [
                'login' => 'user3',
                'password'  => Str::random(8),
                'email' => Str::random(8) . '@mail.ru'
            ],
            [
                'login' => 'user4',
                'password'  => Str::random(8),
                'email' => Str::random(8) . '@mail.ru'
            ]
        ]);
        $user = DB::table('users')->get();
        return view('user', ['user' => $user]);
    }

    //Задание 13.2 пункт 4
    public function changeUserInfo()
    {
        DB::table('users')
            ->where('id', '=', 3)
            ->update([
                'login' => Str::random(8),
                'email' => Str::random(8) . '@mail.ru'
            ]);
        $user = DB::table('users')->get();
        return view('user', ['user' => $user]);
    }
    //Задание 13.2 пункт 5
    public function deleteUser()
    {
        DB::table('users')
            ->where('id', '=', 2)
            ->delete();
        $user = DB::table('users')->get();
        return view('user', ['user' => $user]);
    }
}
