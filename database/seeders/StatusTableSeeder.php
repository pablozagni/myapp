<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    public function run(): void
    {
        Status::create(['name' => 'Active']);
        Status::create(['name' => 'Inactive']);
        Status::create(['name' => 'Suspended']);
    }
}
