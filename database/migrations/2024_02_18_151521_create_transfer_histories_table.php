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
        Schema::create('transfer_histories', function (Blueprint $table) {
            $table->id();
            // sender id untuk id yang mengirim data
            $table->foreignId("sender_id")->constrained("users");
            // sedangkan foreign id untuk menerima data si pengirim
            $table->foreignId("receiver_id")->constrained("users");
            $table->string("transaction_code");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfer_histories');
    }
};
