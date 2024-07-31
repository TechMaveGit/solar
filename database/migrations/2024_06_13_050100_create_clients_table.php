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
            $table->string('client_id')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('mobile')->unique()->nullable();
            $table->string('dial_code')->nullable();
            $table->string('address')->nullable();
            $table->longText('additional_information')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('eircode')->nullable();
            $table->enum('status', ['1', '2'])->default('1')->comment('1=>Active, 2=>Inactive');
            $table->enum('client_type', ['1', '2'])->default('1')->comment('1=>Domestic, 2=>NonDomestic');
            $table->enum('gender', ['male', 'female','others'])->default('male');
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
