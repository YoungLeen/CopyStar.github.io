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
    { Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('название');
        $table->longText('описание');
        $table->text('наличие');
        $table->integer('гарантия');
        $table->text('цвет печати');
        $table->text('основной цвет печати');
        $table->integer('цена');
        $table->text('производитель');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
