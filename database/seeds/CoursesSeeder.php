<?php

use Illuminate\Database\Seeder;
use App\Course;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'name' => 'Computer Algorithms',
            'course_code' => 'CS202',
            'institute_id' => 1,
        ]);
        Course::create([
            'name' => 'Humanities 2',
            'course_code' => 'HUM112',
            'institute_id' => 1,
        ]);
        Course::create([
            'name' => 'Psychology',
            'course_code' => 'PSYC101',
            'institute_id' => 1,
        ]);
    }
}
