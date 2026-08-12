<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // added - Update database settings to resolve NAP address inconsistency
        DB::table('web_settings')->where('key', 'address')->update(['value' => '140 Broadway, 46th Floor, New York, NY 10005']);
        
        // added - Update database settings to resolve phone number inconsistency
        DB::table('web_settings')->where('key', 'phone')->update(['value' => '(855) 526-7890']);
        
        // added - Update email address setting to matching domain
        DB::table('web_settings')->where('key', 'email')->update(['value' => 'info@mounteko.com']);
        
        // added - Update company name references
        DB::table('web_settings')->where('key', 'company Name')->update(['value' => 'Mounteko']);
        DB::table('web_settings')->where('key', 'twitter')->update(['value' => 'Mounteko']);
        DB::table('web_settings')->where('key', 'facebook')->update(['value' => 'Mounteko']);
        DB::table('web_settings')->where('key', 'instagram')->update(['value' => 'Mounteko']);
        DB::table('web_settings')->where('key', 'skype')->update(['value' => 'Mounteko']);
        DB::table('web_settings')->where('key', 'linkdin')->update(['value' => 'Mounteko']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // No-op or restore to defaults if needed
    }
};
