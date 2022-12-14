<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIsiteknologisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isiteknologis', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('judul_kecil');
            $table->text('isi');
            $table->string('gambar');
            $table->foreignId('id_teknologi');
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
        Schema::dropIfExists('isiteknologis');
    }
}
