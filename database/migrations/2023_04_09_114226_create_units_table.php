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
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('code_unit')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_ar')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ar')->nullable();
            $table->string('absorption')->nullable();
            $table->integer('block_id')->nullable();
            $table->integer('zone_id')->nullable();
            $table->string('type')->nullable();//TODO::add enum
            $table->string('price')->nullable();
            $table->bigInteger('number_room')->nullable();
            $table->bigInteger('number_floors')->nullable();
            $table->string('status')->nullable();//TODO::add enum
            $table->string('area')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->string('units_number')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};
