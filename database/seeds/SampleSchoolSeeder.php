<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SampleSchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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

        /* Create School */
        DB::table('school')->insert([
            'name' => 'Test School',
            'email' => Str::random(10).'@example.com',
            'phone' => '+000 00 0000000',
            'address' => '+977 23 456123',
            'slogan' => 'Our own slogan',
            'logo_image_path' => '/sample-path',
        ]);

        /* Create Academic Session */
        $academic_session_id = DB::table('academic_session')->insert([
            'name' => '2078',
        ]);

        /* Create classes for school */
        foreach ($classes as $oClass) {
            $o_class_id = DB::table('o_class')->insert([
                'name' => $oClass,
                'academic_session_id' => $academic_session_id,
            ]);

            /* Add 100 students to this class */
            for ($i=0; $i<2; $i++) {
                $newClass = DB::table('student')->insert([
                    'name' => Str::random(10),
                    'email' => Str::random(10).'@example.com',
                    'phone' => '+000 0000000000',
                    'address' => Str::random(25),
                    'o_class_id' => $o_class_id,
                ]);
            }

            $o_class_id = null;
        }
    }
}
