<?php

namespace Database\Seeders;

use domain\Facades\EmployeeFacade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            ['first_name' => 'faaz', 'last_name' => 'ahd', 'email' => 'ahd@gmail.com'],
            ['first_name' => 'deio', 'last_name' => 'maradona', 'email' => 'maradona@gmail.com'],
            ['first_name' => 'messi', 'last_name' => 'lionel', 'email' => 'lionel@gmail.com'],
            ['first_name' => 'mbappe', 'last_name' => 'klian', 'email' => 'klian@gmail.com'],
            ['first_name' => 'neymar', 'last_name' => 'jkin', 'email' => 'jkin@gmail.com'],

        ];
        foreach ($array as $data) {
            $value = EmployeeFacade::getByEmail($data['email']);
            if (!$value) {
                EmployeeFacade::make($data);
            }
        }
    }
}