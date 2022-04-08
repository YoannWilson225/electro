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
        Schema::create('article_recommande', function (Blueprint $table) {

                $table->unsignedInteger('article_recommande_id');
                $table->foreign('article_recommande_id')->references('id')->on('articles')->onDelete('cascade');

                $table->unsignedInteger('article_id');
                $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');

                $table->primary(['article_recommande_id','article_id']);
                Schema::enableForeignKeyConstraints();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_recommande');
    }
};
