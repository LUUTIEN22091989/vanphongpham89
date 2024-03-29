<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('c_name');
            $table->string('c_avatar');
            $table->string('c_slug')->unique();
            $table->string('c_description')->nullable();
            $table->tinyInteger('c_parent_id')->default(0);
            $table->tinyInteger('c_status')->default(1);
            $table->text('meta_keywords');
            $table->text('meta_desc');
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
        Schema::dropIfExists('categories');
    }
}
