<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranTable extends Migration
{
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produksi_id')->constrained('produksi')->onDelete('cascade');
            $table->decimal('jumlah_pembayaran', 15, 2);
            $table->date('tanggal_pembayaran');
            $table->string('metode_pembayaran');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pembayaran');
    }
}
