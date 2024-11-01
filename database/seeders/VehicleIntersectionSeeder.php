<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VehicleIntersection;
use Faker\Factory as Faker;

class VehicleIntersectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $types = ['Bicycle', 'Car', 'Motorcycle', 'Bus', 'Train', 'Truck'];
        $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        $intersections = ['Intersection A', 'Intersection B', 'Intersection C'];

        foreach (range(1, 20) as $index) {
            VehicleIntersection::create([
                'type' => $faker->randomElement($types),
                'count' => $faker->numberBetween(10, 20),
                'month' => $faker->randomElement($months),
                'intersection' => $faker->randomElement($intersections),
            ]);
        }
    }
}
