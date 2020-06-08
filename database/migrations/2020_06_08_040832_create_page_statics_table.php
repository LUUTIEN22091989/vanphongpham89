<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageStaticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_statics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ps_name');
            $table->string('ps_slug')->index();
            $table->string('ps_avatar')->nullable();
            $table->tinyInteger('ps_active')->default(1)->index();
            $table->tinyInteger('ps_sort')->default(0)->index(); // sắp xếp thứ tự 
            $table->text('ps_content')->nullable();
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
        Schema::dropIfExists('page_statics');
    }
}
