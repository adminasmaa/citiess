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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('price')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('member')->nullable();
            $table->string('amount')->nullable();
            $table->string('type')->nullable();
            $table->date('date')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->text('note')->nullable();
          $table->string('documents')->nullable();

            $table->integer('block_id')->nullable();
            $table->integer('unit_id')->nullable();
            $table->integer('zone_id')->nullable();
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
        Schema::dropIfExists('clients');
    }
};
