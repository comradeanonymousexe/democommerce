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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            # Added later
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('address1', 255);
            $table->string('address2', 255);
            $table->string('city', 255);
            $table->string('state', 45)->nullable();
            $table->string('zipcode', 45);
            $table->string('country_code', 3);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
