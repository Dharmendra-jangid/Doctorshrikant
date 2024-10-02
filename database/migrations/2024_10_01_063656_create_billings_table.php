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
        Schema::create('billings', function (Blueprint $table) {
            $table->id();
                $table->string('name');
                $table->string('phone');
                $table->string('email');
                $table->decimal('fee', 10, 2);
                $table->text('info')->nullable();
                $table->string('payment_id');
                $table->string('appointment_date');
                $table->string('appointment_time');
                $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billings');
    }
};
