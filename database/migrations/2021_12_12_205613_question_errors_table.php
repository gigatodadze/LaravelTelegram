<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class QuestionErrorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionErrors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('questionID');
            $table->unsignedBigInteger('errorID');
            $table->timestamps();

            $table->unique(['questionID', 'errorID']);

            $table->foreign('questionID')->references('id')->on('questions')->onDelete('cascade');
            $table->foreign('errorID')->references('id')->on('errors')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questionErrors');

    }
}
