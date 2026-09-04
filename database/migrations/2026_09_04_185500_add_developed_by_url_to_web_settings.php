<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Update address setting to Delaware
        DB::table('web_settings')->where('key', 'address')->update([
            'value' => '16192 Coastal Highway, Lewes, Delaware 19958'
        ]);

        // Insert 'developed by url' if not exists
        if (!DB::table('web_settings')->where('key', 'developed by url')->exists()) {
            DB::table('web_settings')->insert([
                'group' => 'Footer',
                'key' => 'developed by url',
                'value' => '#',
                'type' => 'text'
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('web_settings')->where('key', 'developed by url')->delete();
    }
};
