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
        Schema::create('leaders', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')->nullable();
            $table->string('place')->nullable();
            $table->date('date')->nullable();
            $table->string('groupname')->unique();
            $table->string('password');
            $table->string('email')->unique()->nullable();
            $table->string('number')->unique()->nullable();
            $table->string('id_line')->unique()->nullable();
            $table->string('github')->nullable();
            $table->timestamps();
        });
    }   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaders');
    }
};
