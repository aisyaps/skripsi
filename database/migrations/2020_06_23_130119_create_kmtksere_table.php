<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKmtksereTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kmtksere', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judulkegiatan', 191);
            $table->enum('periode',['TW1', 'TW2','TW3', 'TW4']);
            $table->string('namadosen', 191);
            $table->enum('kelompokkeahlian', ['rekayasa data', 'rekayasa perangkat lunak dan multimedia','tata kelola dan sistem enterprise', 'teknologi informasi']);
            $table->date('tgl1');
            $table->date('tgl2');
            $table->string('tempat');
            $table->string('penyelenggara' ,50);
            $table->string('prodidosen', 50);
            $table->string('keterangan', 50);
              $table->enum('status',['ON_GOING', 'PUBLISHED']);
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
        Schema::dropIfExists('kmtksere');
    }
}
