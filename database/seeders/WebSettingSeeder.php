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
            ['group' => 'theme', 'key' => 'primary','value'=>'#65E82E','type'=>'color'],
            ['group' => 'theme', 'key' => 'secondary','value'=>'grey','type'=>'color'],
            ['group' => 'contact', 'key' => 'name','value'=>'Jagritee Srivastava','type'=>'text'],
            ['group' => 'contact', 'key' => 'email','value'=>'contact@gmail.com','type'=>'text'],
            ['group' => 'contact', 'key' => 'phone','value'=>'8765786576','type'=>'text'],
            ['group' => 'contact', 'key' => 'address','value'=>'A108 Adam Street, New York, NY 535022','type'=>'text'],
        ];

        DB::table('web_settings')->insert($settings);
    }
}
