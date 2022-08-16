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
        Schema::create('pengumumen', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('id_admin')->constrained('admins');
            $table->string('gambar');
            $table->string('judul');
            $table->string('penyelenggara');
            $table->text('deskripsi');
            // $table->timestamp('diterbitkan')->nullable();
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
        Schema::dropIfExists('pengumumen');
    }
};
