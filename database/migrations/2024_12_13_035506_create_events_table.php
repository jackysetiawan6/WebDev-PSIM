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
        Schema::create('events', function (Blueprint $table) {
            $table->unsignedBigInteger('event_id')->autoIncrement();
            $table->unsignedBigInteger('incident_id')->nullable();
            $table->string('source');
            $table->string('name');
            $table->string('remarks');
            $table->enum('priority', ['low', 'medium', 'high']);
            $table->string('incident_owner')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
