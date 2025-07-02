<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenerimaBantuanTable extends Migration
{
    public function up(): void
    {
        Schema::create('penerima_bantuan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nik')->unique();
            $table->text('alamat');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('no_hp');
            $table->enum('status_bantuan', ['Layak', 'Tidak Layak']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penerima_bantuan');
    }
}