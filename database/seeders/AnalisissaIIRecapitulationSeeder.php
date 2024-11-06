<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AnalisissaIIRecapitulation;

class AnalisissaIIRecapitulationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Morning Period
            ['periode' => 'Morning', 'waktu' => '06.00 - 07.00', 'north' => 30, 'east' => 319, 'south' => 96, 'west' => 428],
            ['periode' => 'Morning', 'waktu' => '06.15 - 07.15', 'north' => 27, 'east' => 335, 'south' => 105, 'west' => 402],
            ['periode' => 'Morning', 'waktu' => '06.30 - 07.30', 'north' => 36, 'east' => 396, 'south' => 124, 'west' => 412],
            ['periode' => 'Morning', 'waktu' => '06.45 - 07.45', 'north' => 34, 'east' => 430, 'south' => 128, 'west' => 393],
            ['periode' => 'Morning', 'waktu' => '07.00 - 08.00', 'north' => 36, 'east' => 439, 'south' => 123, 'west' => 396],

            // Day Period
            ['periode' => 'Day', 'waktu' => '11.00 - 12.00', 'north' => 92, 'east' => 654, 'south' => 124, 'west' => 678],
            ['periode' => 'Day', 'waktu' => '11.15 - 12.15', 'north' => 98, 'east' => 650, 'south' => 130, 'west' => 634],
            ['periode' => 'Day', 'waktu' => '11.30 - 12.30', 'north' => 92, 'east' => 630, 'south' => 120, 'west' => 579],
            ['periode' => 'Day', 'waktu' => '11.45 - 12.45', 'north' => 83, 'east' => 612, 'south' => 123, 'west' => 585],
            ['periode' => 'Day', 'waktu' => '12.00 - 13.00', 'north' => 77, 'east' => 689, 'south' => 125, 'west' => 639],

            // Evening Period
            ['periode' => 'Evening', 'waktu' => '16.00 - 17.00', 'north' => 54, 'east' => 347, 'south' => 60, 'west' => 421],
            ['periode' => 'Evening', 'waktu' => '16.15 - 17.15', 'north' => 57, 'east' => 385, 'south' => 78, 'west' => 473],
            ['periode' => 'Evening', 'waktu' => '16.30 - 17.30', 'north' => 75, 'east' => 534, 'south' => 108, 'west' => 627],
            ['periode' => 'Evening', 'waktu' => '16.45 - 17.45', 'north' => 67, 'east' => 559, 'south' => 114, 'west' => 605],
            ['periode' => 'Evening', 'waktu' => '17.00 - 18.00', 'north' => 52, 'east' => 512, 'south' => 99, 'west' => 448],
        ];

        foreach ($data as $recapitulation) {
            AnalisissaIIRecapitulation::create($recapitulation);
        }
    }
}
