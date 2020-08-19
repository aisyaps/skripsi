<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublikasiseminarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publikasiseminar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judulpenelitian',191 );
            $table->enum('periode',  ['TW1', 'TW2','TW3', 'TW4']);
            $table->string('penulis1',191);
            $table->string('anggotapenulis2', 191);
            $table->string('anggotapenulis3', 191);
            $table->string('anggotapenulis4', 191);
            $table->string('anggotapenulis5', 191);
            $table->enum('kelompokkeahlian', ['rekayasa data', 'rekayasa perangkat lunak dan multimedia','tata kelola dan sistem enterprise', 'teknologi informasi']);
            $table->string('kategori', 191);
            $table->string('nama',191);
            $table->string('publisherlokasi' ,191);
            $table->string('volnojurnaltglsem', 50);
            $table->integer('biayapublikasi')->unsigned();
            $table->integer('stimulus')->unsigned();
            $table->string('keterangan', 191);
            $table->enum('status',  ['published', 'done','LOA']);
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
        Schema::dropIfExists('publikasiseminar');
    }
}
