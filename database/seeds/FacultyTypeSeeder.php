<?php

use Illuminate\Database\Seeder;
use App\Models\FacultyType;

class FacultyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data= array(
            array("type"=>"Engeneering"),
            array("type"=>"Information Technology"),
            array("type"=>"Business Management"),
            array("type"=>"Hospitality Management"),
        );
        FacultyType::insert($data);
    }
}
