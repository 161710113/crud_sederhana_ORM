<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('plat_nomor');
            $table->string('nama_mobil');
            $table->string('transmisi');
            $table->string('no_hp');
            $table->string('harga');
            $table->longText('deskripsi');
            $table->unsignedInteger('id_merk');
            $table->foreign('id_merk')->references('id')->on('merks')->onDelete('CASCADE');
            $table->unsignedInteger('id_tipe');
            $table->foreign('id_tipe')->references('id')->on('tipes')->onDelete('CASCADE');
            $table->unsignedInteger('id_lokasi');
            $table->foreign('id_lokasi')->references('id')->on('lokasis')->onDelete('CASCADE');
            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('CASCADE');
            $table->string('foto');
            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('mobils');
    }
}
