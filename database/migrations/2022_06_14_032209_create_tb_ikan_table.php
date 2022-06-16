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
        Schema::create('tb_ikan', function (Blueprint $table) {
            $table->increments('ikan_id');
            $table->string('ikan_kode');
            $table->string('ikan_nama');
            $table->string('ikan_jenis');
            $table->string('ikan_harga');
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
        Schema::dropIfExists('tb_ikan');
    }
};
