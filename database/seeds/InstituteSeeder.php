<?php

use Illuminate\Database\Seeder;
use App\Institute;

class InstituteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Institute::create([
            'name' => 'Bilkent University',
            'country_id' => 1,
            'slug' => 'bilkent',
        ]);

        Institute::create([
            'name' => 'Test University',
            'country_id' => 1,
            'slug' => 'test1',
        ]);

        Institute::create([
            'name' => 'Test High School',
            'country_id' => 1,
            'slug' => 'test2',
        ]);

        Institute::create([
            'name' => 'Test College',
            'country_id' => 1,
            'slug' => 'test3',
        ]);
    }
}
