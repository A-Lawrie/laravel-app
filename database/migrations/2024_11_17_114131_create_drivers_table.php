<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * up() methods creates, adds tables and columns
     */
    public function up(): void
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('driverName');
            $table->string('busName');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * Does the opposite of the up() method
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
