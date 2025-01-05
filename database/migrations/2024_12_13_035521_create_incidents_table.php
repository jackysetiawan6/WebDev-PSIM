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
        Schema::create('incidents', function (Blueprint $table) {
            $table->unsignedBigInteger('incident_id')->autoIncrement();
            $table->enum('status', ['Cancelled', 'Logged', 'Active', 'Waiting for Customer', 'Waiting for 3rd Party', 'Resolved', 'Closed']);
            $table->unsignedBigInteger('source_id');
            $table->unsignedBigInteger('location_id');
            $table->string('incident_owner')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('source_id')->references('id')->on('sources');
            $table->foreign('location_id')->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incidents');
    }
};
