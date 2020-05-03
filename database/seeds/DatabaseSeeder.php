<?php

use App\Models\ClassSection;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //$this->call(ClassSectionSeeder::class);
        $this->call(ClassSeeder::class);
    }
}
