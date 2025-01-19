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
        Schema::create('distribusi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produksi_id'); // Foreign key untuk produksi_id
            $table->string('tujuan');
            $table->integer('jumlah');
            $table->date('tanggal_distribusi');
            $table->timestamps();

            // Menambahkan foreign key constraint untuk produksi_id
            $table->foreign('produksi_id')->references('id')->on('produksi')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('distribusi');
    }
};
