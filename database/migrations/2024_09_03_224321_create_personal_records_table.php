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
        Schema::create('personal_records', function (Blueprint $table) {
            $table->tinyIncrements('id');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('cli_users');

            $table->unsignedBigInteger('movement_id');
            $table->foreign('movement_id')->references('id')->on('movements');

            $table->float('value');
            $table->dateTime('date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_records');
    }
};
