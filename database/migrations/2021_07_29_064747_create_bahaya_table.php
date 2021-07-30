<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBahayaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bahaya', function (Blueprint $table) {
            $table->id();
            $table->string('code_bahaya')->unique();
            $table->string('kode_kecamatan');
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
        Schema::dropIfExists('bahaya');
    }
}
