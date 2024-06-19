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
        Schema::create('bbideals', function (Blueprint $table) {
            $table->id('id_bbideal');
            $table->string('jumlahbb',50);
            $table->string('jenis_kelamin',50);
            $table->string('jumlahideal',50);
            $table->string('kategori',50);
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
        Schema::dropIfExists('bbideals');
    }
};
