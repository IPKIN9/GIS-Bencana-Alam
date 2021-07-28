<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKasusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kasus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kabupaten')->constrained('kabupaten');
            $table->foreignId('id_kecamatan')->constrained('kecamatan');
            $table->foreignId('id_jenis_bahaya')->constrained('jenis_bahaya');
            $table->integer('total_luas_bahaya');
            $table->foreignId('id_kelas')->constrained('kelas');
            $table->integer('jumlah_penduduk_terpapar');
            $table->integer('total_kerugian');
            $table->foreignId('kelas_kerugian')->constrained('kelas');
            $table->foreignId('kelas_kerusakan')->constrained('kelas');
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
        Schema::dropIfExists('kasus');
    }
}
