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
        Schema::create('transcations_types', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("code");
            $table->enum("action",["cr","dr",]);
            $table->string("thumbnail")->nullable();
            // soft delete digunakan untuk menghapus data melalui laravel,tetapi data nya tidak akan terhapus
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::dropIfExists('transactions_types');
}
};
