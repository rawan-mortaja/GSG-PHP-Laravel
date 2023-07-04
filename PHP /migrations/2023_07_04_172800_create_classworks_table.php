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
        Schema::create('classworks', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('title');
            $table->string('instructions')
                ->nullable();
            $table->string('attach')
                ->nullable();
            $table->string('for');
            $table->integer('points')
                ->nullable();
            $table->date('date')
                ->nullable();
            $table->timestamp('time')
                ->nullable();
            $table->string('topic')
                ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classworks');
    }
};
