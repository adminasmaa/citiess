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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('grand_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('date')->nullable();
            $table->string('address')->nullable();
            $table->string('placebirth')->nullable();
            $table->string('status')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('last_certificale')->nullable();
            $table->string('calculayed_certificale')->nullable();
            $table->string('notes')->nullable();
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
