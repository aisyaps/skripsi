<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePktkseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pktkse', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rencanakerja',191);
            $table->string ('justifikasi',191);
            $table->date('tgl_plan');
            $table->string('drk',191);
            $table->integer('rencanabiaya',50);
            $table->string ('kategori',50);
            $table->string ('pic',50);
            $table->enum ('status',['belum dipublikasi', 'sudah dipublikasi']);
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
        Schema::dropIfExists('pktkse');
    }
}
