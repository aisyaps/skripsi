<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbdimaseksternalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abdimaseksternal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judulkegiatanpengmas', 191);
            $table->enum('periode',['TW1', 'TW2','TW3', 'TW4']);
            $table->string('namadosen1',191);
            $table->string('namadosen2',191);
            $table->string('namadosen3',191);
            $table->string('namadosen4',191);
            $table->string('namadosen5',191);
            $table->string('namamahasiswa1',191);
            $table->string('namamahasiswa2',191);
            $table->string('namamahasiswa3',191);
            $table->string('namamahasiswa4',191);
            $table->string('namamahasiswa5',191);
            $table->enum('kelompokkeahlian', ['rekayasa data', 'rekayasa perangkat lunak dan multimedia','tata kelola dan sistem enterprise', 'teknologi informasi']);
            $table->date('tgl');
            $table->string('tempat');
            $table->string('prodidosen',50);
            $table->string('prodidosen2',50);
            $table->string('prodidosen3',50);
            $table->string('prodidosen4',50);
            $table->string('prodidosen5',50);
            $table->enum('kategori',['insidental', 'eksternal']);
            $table->string('biaya', 191);
            $table->enum('status', ['done','on_going']);
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
        Schema::dropIfExists('abdimaseksternal');
    }
}
