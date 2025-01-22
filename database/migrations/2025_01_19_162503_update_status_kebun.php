<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateStatusKebun extends Migration
{
    public function up()
    {
        Schema::table('kebun', function (Blueprint $table) {
            $table->enum('status', ['aktif', 'tidak_aktif'])->default('aktif')->change();
        });
    }

    public function down()
    {
        Schema::table('kebun', function (Blueprint $table) {
            $table->string('status')->change(); // Menjadi tipe data string lagi jika rollback
        });
    }
}

