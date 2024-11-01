<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TrafficFlowVisualization;

class TrafficFlowVisualizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'uploaded' => '2024-10-17 14:10:00',
                'bicycle' => 1000,
                'car' => 0,
                'motorcycle' => 0,
                'bus' => 0,
                'train' => 0,
                'truck' => 0,
            ],
            [
                'uploaded' => '2024-10-17 14:13:00',
                'bicycle' => 0,
                'car' => 0,
                'motorcycle' => 0,
                'bus' => 0,
                'train' => 12,
                'truck' => 0,
            ],
            [
                'uploaded' => '2024-10-18 09:34:41',
                'bicycle' => 100,
                'car' => 0,
                'motorcycle' => 0,
                'bus' => 0,
                'train' => 0,
                'truck' => 0,
            ],
            [
                'uploaded' => '2024-10-18 09:34:57',
                'bicycle' => 100,
                'car' => 200,
                'motorcycle' => 0,
                'bus' => 0,
                'train' => 0,
                'truck' => 0,
            ],
            [
                'uploaded' => '2024-10-18 10:16:16',
                'bicycle' => 0,
                'car' => 0,
                'motorcycle' => 0,
                'bus' => 0,
                'train' => 0,
                'truck' => 0,
            ],
            [
                'uploaded' => '2024-10-18 10:50:57',
                'bicycle' => 0,
                'car' => 25,
                'motorcycle' => 6,
                'bus' => 0,
                'train' => 0,
                'truck' => 1,
            ],
            [
                'uploaded' => '2024-10-18 10:51:57',
                'bicycle' => 0,
                'car' => 27,
                'motorcycle' => 24,
                'bus' => 0,
                'train' => 0,
                'truck' => 0,
            ],
            [
                'uploaded' => '2024-10-18 10:52:07',
                'bicycle' => 0,
                'car' => 26,
                'motorcycle' => 22,
                'bus' => 0,
                'train' => 0,
                'truck' => 0,
            ],
            [
                'uploaded' => '2024-10-18 10:52:17',
                'bicycle' => 0,
                'car' => 33,
                'motorcycle' => 22,
                'bus' => 0,
                'train' => 0,
                'truck' => 0,
            ],
            [
                'uploaded' => '2024-10-18 10:52:27',
                'bicycle' => 0,
                'car' => 28,
                'motorcycle' => 20,
                'bus' => 0,
                'train' => 0,
                'truck' => 0,
            ],
            [
                'uploaded' => '2024-10-22 11:49:16',
                'bicycle' => 0,
                'car' => 0,
                'motorcycle' => 0,
                'bus' => 0,
                'train' => 0,
                'truck' => 0,
            ],
        ];

        foreach ($data as $entry) {
            TrafficFlowVisualization::create($entry);
        }
    }
}
