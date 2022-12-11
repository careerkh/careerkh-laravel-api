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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('position');
            $table->string('href');
            $table->string('industry');
            $table->string('description');
            $table->string('caption');
            $table->string('term');
            $table->string('location');
            $table->string('salary');
            $table->string('date');
            $table->string('imageUrl');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('careers');
    }
};