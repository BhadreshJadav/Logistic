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
        Schema::create('dboy_complaints', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('dboy_id')->unsigned();
            $table->string('subject');
            $table->longText('description');
            $table->string('status');
            $table->timestamps();

            $table->foreign('dboy_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dboy_complaints');
    }
};
