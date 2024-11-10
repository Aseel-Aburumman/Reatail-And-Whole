<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusTableSeeder extends Seeder
{
    public function run()
    {

        Status::create([
            'name' => 'open',
        ]);

        Status::create([
            'name' => 'close',
        ]);
    }
}
