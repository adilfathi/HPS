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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->integer('bulan');
            $table->integer('year');
            $table->decimal('pencicilan_rutin', 15, 2);
            $table->decimal('pencicilan_bertahap', 15, 2);
            // $table->timestamps();
            $table->foreign('code')->references('code')->on('t_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
