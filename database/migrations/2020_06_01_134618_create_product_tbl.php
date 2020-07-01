<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTbl extends Migration
{

    public function up()
    {
        Schema::create('product_tbl', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title','50');
            $table->text('description');
            $table->softDeletes();
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
        Schema::dropIfExists('product_tbl');
    }
}
