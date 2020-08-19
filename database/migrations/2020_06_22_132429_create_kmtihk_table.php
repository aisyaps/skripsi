<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKmtihkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kmtihk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judulhaki', 191);
            $table->enum('periode', ['TW1', 'TW2','TW3', 'TW4']);
            $table->string('pemeganghakcipta',191);
            $table->string('pencipta',191);
            $table->string('pencipta2',191);
            $table->string('pencipta3',191);
            $table->string('pencipta4',191);
            $table->string('pencipta5',191);
            $table->string('pencipta6',191);
            $table->string('pencipta7',191);
            $table->enum('kelompokkeahlian', ['rekayasa data', 'rekayasa perangkat lunak dan multimedia','tata kelola dan sistem enterprise', 'teknologi informasi']);
            $table->string('jenisciptaan');
            $table->date('tgl');
            $table->integer('biayapendaftaran')->unsigned();
           $table->enum('status', ['done', 'on_going']);
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
        Schema::dropIfExists('kmtihk');
    }
}
