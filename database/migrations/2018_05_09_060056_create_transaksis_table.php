<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_pemilik')->unsigned();
            $table->integer('id_peminjam')->unsigned();
            $table->integer('id_barang')->unsigned();
            $table->integer('jbarang');

            $table->foreign('id_pemilik')
            ->references('id')->on('users')
            ->onDelete('cascade');

            $table->foreign('id_peminjam')
            ->references('id')->on('users')
            ->onDelete('cascade');

            $table->foreign('id_barang')
            ->references('id')->on('posts')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
