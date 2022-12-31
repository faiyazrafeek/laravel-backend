<?php

namespace Database\Seeders;

use domain\Facades\ScheduleFacade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            ['employee_id' => '1', 'shift_id' => '1', 'location_id' => '1', 'day' => 1],
            ['employee_id' => '2', 'shift_id' => '2', 'location_id' => '1', 'day' => 2],
        ];
        foreach ($array as $data) {
            ScheduleFacade::make($data);
        }
    }
}