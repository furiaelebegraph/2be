<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInmuebleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmueble', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre')->default('N/A');
            $table->integer('cate_id');
            $table->string('imagen')->default('default.png');
            $table->string('orden');
            $table->string('titulo')->default('N/A');
            $table->text('descripcion');
            $table->enum('activo', ['si', 'no'])->default('si');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inmueble');
    }
}
