<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoboticsKit;

class RoboticsKitSeeder extends Seeder
{
    public function run(): void
    {
        $kits = ['StarterKit', 'Educational Robotics Kit', 'Kit5'];

        foreach ($kits as $kit) {
            RoboticsKit::create([
                'name' => $kit
            ]);
        }
    }
}