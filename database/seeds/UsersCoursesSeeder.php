<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Course;

class UsersCoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::where('id', 1)->courses()->attach( Course::where('id', 1)->first());
        $courses = Course::find(4);

        User::where('id', 1)->get()->courses()->attach($courses, [
            'rating' => 0.0,
            'time_slot' => 1,
        ]);
    }
}
