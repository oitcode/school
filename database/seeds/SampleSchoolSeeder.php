<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
//use Faker\Generator as Faker;

class SampleSchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $o_section_id;
        $o_class_id;

        $classes = [
          'Nursery',
          'LKG',
          'UKG',
          'One',
          'Two',
          'Three',
          'Four',
          'Five',
          'Six',
          'Seven',
          'Eight',
          'Nine',
          'Ten',
        ];

        $faker = Faker\Factory::create();

        /* Create School */
        DB::table('school')->insert([
            'name' => 'Test School',
            'email' => $faker->email(),
            'phone' => $faker->phoneNumber(),
            'address' => $faker->address(),
            'slogan' => 'Our own slogan',
            'logo_image_path' => '/sample-path',
        ]);

        /* Create Academic Session */
        $academic_session_id = DB::table('academic_session')->insert([
            'name' => '2078',
            'status' => 'current',
        ]);

        /* Create classes for school */
        foreach ($classes as $oClass) {
            unset($o_class_id);
            $o_class_id = DB::table('o_class')->insertGetId([
                'name' => $oClass,
                'academic_session_id' => $academic_session_id,
            ]);

            /* Create section in this class */
            foreach (['A', 'B'] as $sectionName) {
                $section_id = DB::table('section')->insertGetId([
                    'name' => $sectionName,
                    'o_class_id' => $o_class_id,
                ]);

                /* Add 50 students to this section */
                for ($i=0; $i<50; $i++) {

                    $student_id = DB::table('student')->insertGetId([
                        'name' => $faker->name(),
                        'email' => Str::random(10).'@example.com',
                        'phone' => '+000 0000000000',
                        'address' => Str::random(25),
                    ]);

                    DB::table('section_student')->insertGetId([
                        'section_id' => $section_id,
                        'student_id' => $student_id,
                        'status' => 'current',
                    ]);
                }
            }

        }
    }
}
