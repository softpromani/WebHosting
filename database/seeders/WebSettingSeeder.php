<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WebSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $settings = 
        [
            // Andhra Pradesh
            ['group' => 'theme', 'key' => 'primary','value'=>'#65E82E'],
            ['group' => 'theme', 'key' => 'secondary','value'=>'grey'],
            ['group' => 'theme', 'key' => 'info','value'=>'skyblue'],
            ['group' => 'theme', 'key' => 'dark','value'=>'black'],
            ['group' => 'theme', 'key' => 'danger','value'=>'red'],
            ['group' => 'contact', 'key' => 'name','value'=>'Jagritee Srivastava'],
            ['group' => 'contact', 'key' => 'email','value'=>'jag@gmail.com'],
            ['group' => 'contact', 'key' => 'phone','value'=>'8765786576'],
        ];

        DB::table('web_settings')->insert($settings);
    }
}
