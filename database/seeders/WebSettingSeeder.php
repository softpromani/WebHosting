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
            ['group' => 'Logo', 'key' => 'logo','value'=>'admin/assets/dist/img/logo.png','type'=>'file'],
            ['group' => 'Theme', 'key' => 'primary','value'=>'#65E82E','type'=>'color'],
            ['group' => 'Theme', 'key' => 'secondary','value'=>'grey','type'=>'color'],
            ['group' => 'Contact', 'key' => 'name','value'=>'Jagritee Srivastava','type'=>'text'],
            // removed - ['group' => 'Contact', 'key' => 'email','value'=>'contact@gmail.com','type'=>'text'],
            // added
            ['group' => 'Contact', 'key' => 'email','value'=>'info@mounteko.com','type'=>'text'],
            // removed - ['group' => 'Contact', 'key' => 'phone','value'=>'8765786576','type'=>'text'],
            // added
            ['group' => 'Contact', 'key' => 'phone','value'=>'(855) 526-7890','type'=>'text'],
            // removed - ['group' => 'Contact', 'key' => 'address','value'=>'A108 Adam Street, New York, NY 535022','type'=>'text'],
            // added
            ['group' => 'Contact', 'key' => 'address','value'=>'16192 Coastal Highway, Lewes, Delaware 19958','type'=>'text'],
            ['group' => 'Footer', 'key' => 'developed by','value'=>'Innovation Trove ','type'=>'text'],
            ['group' => 'Footer', 'key' => 'developed by url','value'=>'#','type'=>'text'],
            // removed - ['group' => 'Footer', 'key' => 'company Name','value'=>'Web Hosting','type'=>'text'],
            // added
            ['group' => 'Footer', 'key' => 'company Name','value'=>'Mounteko','type'=>'text'],
            ['group' => 'Location', 'key' => 'map','value'=>'https://maps.app.goo.gl/Sovdu7XAEuBM5B6g9','type'=>'text'],
            // removed -
            // ['group' => 'Social media', 'key' => 'twitter','value'=>'Web Hosting','type'=>'text'],
            // ['group' => 'Social media', 'key' => 'facebook','value'=>'Web Hosting','type'=>'text'],
            // ['group' => 'Social media', 'key' => 'instagram','value'=>'Web Hosting','type'=>'text'],
            // ['group' => 'Social media', 'key' => 'skype','value'=>'Web Hosting','type'=>'text'],
            // ['group' => 'Social media', 'key' => 'linkdin','value'=>'Web Hosting','type'=>'text'],
            // added
            ['group' => 'Social media', 'key' => 'twitter','value'=>'Mounteko','type'=>'text'],
            ['group' => 'Social media', 'key' => 'facebook','value'=>'Mounteko','type'=>'text'],
            ['group' => 'Social media', 'key' => 'instagram','value'=>'Mounteko','type'=>'text'],
            ['group' => 'Social media', 'key' => 'skype','value'=>'Mounteko','type'=>'text'],
            ['group' => 'Social media', 'key' => 'linkdin','value'=>'Mounteko','type'=>'text'],
        ];

        DB::table('web_settings')->insert($settings);
    }
}
