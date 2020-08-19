<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHibaheksternalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hibaheksternal', function (Blueprint $table) {
             $table->increments('id');
            $table->string('judulpenelitian', 191);
            $table->enum('periode',['TW1','TW2','TW3','TW4']);
            $table->string('peneliti1',191);
            $table->string('anggotapeneliti2', 191);
            $table->string('anggotapeneliti3', 191);
            $table->string('anggotapeneliti4', 191);
            $table->enum('kelompokkeahlian', ['rekayasa data', 'rekayasa perangkat lunak dan multimedia','tata kelola dan sistem enterprise', 'teknologi informasi']);
            $table->integer('dana_diajukan')->unsigned();
            $table->integer('dana_disetujui')->unsigned();
            $table->enum('kategori' ,['pengmas','penelitian']);
             $table->string('keterangan', 191);
            $table->enum('status', ['ON_GOING','DONE']);
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
        Schema::dropIfExists('hibaheksternal');
    }
}
