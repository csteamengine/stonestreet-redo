<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'title' => 'Websites',
                'description' => 'Projects that are a website or web based applications.',
                'isactive' => true
            ],[
                'title' => 'Hardware',
                'description' => 'Projects that are primarily hardware based.',
                'isactive' => true
            ],[
                'title' => 'Software',
                'description' => 'Projects that are software based but not cloud based.',
                'isactive' => true
            ]
        ]);
    }
}
