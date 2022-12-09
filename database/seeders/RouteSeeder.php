<?php

namespace Database\Seeders;

use App\Models\Route;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'blog_one',
            ],
            [
                'name' => 'blog_two',
            ],
            [
                'name' => 'blog_three',
            ],
            [
                'name' => 'blog_four',
            ],
        ];
        Route::insert($data);
    }
}
