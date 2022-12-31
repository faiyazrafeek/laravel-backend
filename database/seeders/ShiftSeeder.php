<?php

namespace Database\Seeders;

use domain\Facades\ShiftFacade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            ['name' => 'Shift 1', 'slug' => 'shift-1', 'start_time' => '08:00', 'shift_length' => '8'],
            ['name' => 'Shift 2', 'slug' => 'shift-2', 'start_time' => '04:00', 'shift_length' => '8'],
            ['name' => 'Shift 3', 'slug' => 'shift-3', 'start_time' => '11:00', 'shift_length' => '8'],

        ];
        foreach ($array as $data) {
            $value = ShiftFacade::getBySlug($data['slug']);
            if (!$value) {
                ShiftFacade::make($data);
            }
        }
    }
}