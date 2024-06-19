<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mknsehats', function (Blueprint $table) {
            $table->id('id_mknsehat');
            $table->string('nama_makanan',50);
            $table->string('jenis_makanan',50);
            $table->string('jumlah_makanan',50);
            $table->string('kalori_makanan',50);
            $table->string('bahan_makanan',50);
            $table->string('gambar',100);
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
        Schema::dropIfExists('mknsehats');
    }
};
