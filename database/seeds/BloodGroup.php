<?php

use Illuminate\Database\Seeder;

class BloodGroup extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blood_groups')->insert([
            [
                'id' => '1',
                'blood_group' => 'A+',
            ],

            [
                'id' => '2',
                'blood_group' => 'A-',
            ],

            [
                'id' => '3',
                'blood_group' => 'B+',
            ],

            [
                'id' => '4',
                'blood_group' => 'B-',
            ],

            [
                'id' => '5',
                'blood_group' => 'O+',
            ],

            [
                'id' => '6',
                'blood_group' => 'O-',
            ],

            [
                'id' => '7',
                'blood_group' => 'AB+',
            ],

            [
                'id' => '8',
                'blood_group' => 'AB-',
            ],




        ]);

    }
}
