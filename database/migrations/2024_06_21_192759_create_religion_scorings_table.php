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
        Schema::create('religion_scorings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->length(50);
            $table->Integer('NIP', false, true)->length(20);
            $table->tinyInteger('stage', false, true);
            $table->tinyInteger('s1', false, true);
            $table->tinyInteger('s2', false, true);
            $table->tinyInteger('s3', false, true);
            $table->tinyInteger('s4', false, true);
            $table->tinyInteger('s5', false, true);
            $table->tinyInteger('s6', false, true);
            $table->tinyInteger('s7', false, true);
            $table->tinyInteger('s8', false, true);
            $table->tinyInteger('s9', false, true);
            $table->tinyInteger('s10', false, true);
            $table->tinyInteger('s11', false, true);
            $table->tinyInteger('s12', false, true);
            $table->tinyInteger('s13', false, true);
            $table->tinyInteger('s14', false, true);
            $table->tinyInteger('s15', false, true);
            $table->tinyInteger('s16', false, true);
            $table->tinyInteger('s17', false, true);
            $table->tinyInteger('s18', false, true);
            $table->tinyInteger('s19', false, true);
            $table->tinyInteger('s20', false, true);
            $table->tinyInteger('s21', false, true);
            $table->tinyInteger('s22', false, true);
            $table->tinyInteger('s23', false, true);
            $table->tinyInteger('s24', false, true);
            $table->tinyInteger('s25', false, true);
            $table->tinyInteger('s26', false, true);
            $table->tinyInteger('s27', false, true);
            $table->tinyInteger('s28', false, true);
            $table->tinyInteger('score', false, true)->nullable();
            $table->string('grade')->nullable()->length(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('religion_scorings');
    }
};
