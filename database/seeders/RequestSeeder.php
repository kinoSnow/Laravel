<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'iwata',
            'addrees' => 'tokyo',
            'tel' => '090-8989-0909',
            'request' => 'test',
           'mean'=>1
        ];
DB::table('requests')->insert($param);  //
    }
}
