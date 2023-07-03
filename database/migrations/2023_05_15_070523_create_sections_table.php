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
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('section')->nullable();
            $table->string('position')->nullable();
            $table->string('career_title')->nullable();
            $table->string('workplace')->nullable();
            $table->string('contract')->nullable();
            $table->string('certificale')->nullable();
            $table->string('jurisdiction')->nullable();
            $table->string('status')->nullable();
            $table->string('date')->nullable();
            $table->integer('jod_id')->nullable();
            $table->integer('employee_id')->nullable();
            $table->string('notes')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
