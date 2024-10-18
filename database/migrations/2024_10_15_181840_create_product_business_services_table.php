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
        Schema::create('product_business_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->string('tab_name')->nullable();
            $table->string('tab_icon')->nullable();
            $table->string('header_icon')->nullable();
            $table->string('header_text')->nullable();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->text('service_image')->nullable();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_business_services');
    }
};
