<?php

use Illuminate\Database\Seeder;
use Database\Seeders\BlogSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            BlogSeeder::class,
        ]);
    }
}
