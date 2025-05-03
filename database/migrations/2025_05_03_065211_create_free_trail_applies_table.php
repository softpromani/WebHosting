<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('free_trail_applies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone_number')->nullable();
            $table->string('business_name')->nullable();
            $table->longText('application_detail')->nullable();
            $table->longText('license_key')->nullable();
            $table->bigInteger('number_users')->default(0);
            $table->longText('username')->nullable();
            $table->longText('aditional_comment')->nullable();
            $table->boolean('agreement')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('free_trail_applies');
    }
};
