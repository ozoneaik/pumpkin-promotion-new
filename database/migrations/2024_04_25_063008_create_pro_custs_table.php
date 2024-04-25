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
        Schema::create('pro_custs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('cust_code');
            $table->string('cust_name');
            $table->string('cust_address');
            $table->string('cust_city');
            $table->string('cust_amphure');
            $table->string('cust_tambon');
            $table->string('cust_phone');
            $table->string('cust_zip');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pro_custs');
    }
};
