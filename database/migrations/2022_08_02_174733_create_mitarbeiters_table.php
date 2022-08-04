<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitarbeiters', function (Blueprint $table) {
            $table->id();
            $table->String('firmen_id')->default(1);;
            $table->String('vorname')->default(1);;
            $table->String('nachname')->default(1);;
            $table->String('email')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mitarbeiters');
    }
};
