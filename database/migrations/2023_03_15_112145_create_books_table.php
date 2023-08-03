<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')->nullable();
            $table->json('authors')->nullable();
            $table->string('explanation', 5000)->nullable();
            $table->string('notes', 5000)->default(null)->nullable();
            $table->json('category')->nullable();
            $table->string('img',1000)->nullable();
            $table->string('date')->nullable();
            $table->integer('pages')->nullable();
            $table->integer('rate')->nullable();
            $table->boolean('readBefore')->nullable()->default(false);
            $table->boolean('searchable')->default(true);
            $table->string('link')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
