<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Dashboard;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     */
    public function run(): void{

        $users = [
            ['name' => 'Munish', 'email' => 'munish@example.com', 'password' => 'password'],
            ['name' => 'Giridharan', 'email' => 'giri@example.com', 'password' => 'password'],
        ];

        foreach ($users as $user) {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => \Hash::make($user['password']),
            ]);
        }

        $results = [
            ['reg_no' => '34434', 'mark_one' => '89', 'mark_two' => '68', 'mark_three' => '97', 'exam_date' => '2023-06-23'],
            ['reg_no' => '54545', 'mark_one' => '78', 'mark_two' => '93', 'mark_three' => '78', 'exam_date' => '2023-06-23'],
        ];

        foreach ($results as $result) {
            Dashboard::create([
                'reg_no' => $result['reg_no'],
                'mark_one' => $result['mark_one'],
                'mark_two' => $result['mark_two'],
                'mark_three' => $result['mark_three'],
                'exam_date' => $result['exam_date'],
            ]);
        }
    }
}
