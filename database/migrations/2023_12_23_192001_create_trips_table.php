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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('bus_id')->constrained();
            $table->foreignId('location_id')->constrained();
            $table->decimal('ticket_price', 8, 2);
            $table->boolean('status')->default(1)->comment('0 = inactive; 1 = active');
            $table->integer('seat_number');
            $table->decimal('total_amount', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
