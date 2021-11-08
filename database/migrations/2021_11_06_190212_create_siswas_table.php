<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nisn', 12);
            $table->char('nis', 8);
            $table->string('nama', 35);
            $table->bigInteger('id_kelas')->unsigned();
            $table->string('password');
            $table->foreign('id_kelas')->references('id')->on('kelass')->onDelete('cascade')->onUpdate('cascade');
            $table->text('alamat');
            $table->string('nomor_telp');
            $table->bigInteger('id_spp')->unsigned();
            $table->foreign('id_spp')->references('id')->on('spps');
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
        Schema::dropIfExists('siswas');
    }
}
