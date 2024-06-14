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
        Schema::create('job_orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('client_type', ['1', '2'])->default('1')->comment('1=>Domestic, 2=>NonDomestic');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('staff_id');
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();
            $table->enum('status', ['0', '1'])->default('0')->comment('0=>pending, 1=>completed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_orders');
    }
};
