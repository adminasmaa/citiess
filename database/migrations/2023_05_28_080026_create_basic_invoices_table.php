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
        Schema::create('basic_invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('client_id')->nullable();
            $table->integer('unit_id')->nullable();
            $table->string('invoice_name')->nullable();
            $table->string('invoice_type')->nullable();
            $table->string('invoice_price')->nullable();
            $table->string('date')->nullable();
            $table->string('payment_date')->nullable();
            $table->string('amount')->nullable();
            $table->string('type')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basic_invoices');
    }
};
