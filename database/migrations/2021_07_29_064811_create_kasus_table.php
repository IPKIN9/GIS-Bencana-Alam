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
            $table->foreignId('id_bahaya')->constrained('bahaya');
            $table->string('code_bahaya')->constrained('bahaya', 'code_bahaya');
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
