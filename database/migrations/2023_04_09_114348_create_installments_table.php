<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('installments', function (Blueprint $table) {
            $table->id();
            $table->integer('unit_id')->nullable();
            // $table->unsignedBigInteger('client_id')->nullable();
            // $table->foreign('client_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('amount')->nullable();
            $table->double('price')->nullable();
            $table->string('phone_one')->nullable();
            $table->string('phone_two')->nullable();
            $table->bigInteger('delay_total')->nullable();
            $table->bigInteger('price_part_delay')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('installments');
    }
};
