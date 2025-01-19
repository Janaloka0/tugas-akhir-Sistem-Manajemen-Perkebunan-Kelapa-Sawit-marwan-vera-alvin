<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('produksi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kebun_id'); // foreign key kebun_id
            $table->integer('jumlah_tandan');
            $table->float('berat_total');
            $table->date('tanggal_panen');
            $table->timestamps();

            // Menambahkan foreign key constraint
            $table->foreign('kebun_id')->references('id')->on('kebun')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('produksi');
    }
};
