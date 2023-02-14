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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('user_auths')->onDelete('cascade');
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade'); 
            $table->bigInteger('subcategory_id')->unsigned();
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');
            $table->string('level');
            $table->decimal('price');
            $table->string('promo_link');
            $table->string('featured_video');
            $table->string('featured_image');
            $table->string('duration');
            $table->integer('approved');
            $table->integer('published');
            $table->text('primary_subject');
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
        Schema::dropIfExists('courses');
    }
};
