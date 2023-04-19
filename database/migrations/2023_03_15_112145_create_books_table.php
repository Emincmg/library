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
            $table->string('book_title')->nullable();
            $table->string('book_author')->nullable();
            $table->string('book_explanation', 1000)->nullable();
            $table->json('book_category')->nullable();
            $table->string('book_img')->nullable();
            $table->string('book_date')->nullable();
            $table->integer('book_views')->nullable();
            $table->integer('book_stock')->nullable();


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
