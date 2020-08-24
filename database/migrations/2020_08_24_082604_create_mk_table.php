<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mk', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('mahasiswa_id')->unsigned();
            $table->integer('kode_mk');
            $table->string('mata_kuliah');
            $table->integer('sks');
            $table->timestamps();
        });

        Schema::table('mk', function (Blueprint $table) {
    
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mk');
    }
}
