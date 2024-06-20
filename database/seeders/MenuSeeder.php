<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $m1= Menu::create(['name'=>'Accounting Solutions']);
        Menu::create(['name'=>'QuickBooks Hosting','parent_id'=>$m1->id]);
        Menu::create(['name'=>'Sage Application Hosting','parent_id'=>$m1->id]);
        Menu::create(['name'=>'Tax Software Hosting','parent_id'=>$m1->id]);
    }
}
