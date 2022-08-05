<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('member_programs', function (Blueprint $table) {
            $table->integer('member_program')->autoIncrement();
            $table->integer('program_id');
            $table->integer('user_id')->nullable();
            $table->string('file');
            $table->string('reason');
            $table->enum('status', ['mendaftar', 'ditolak', 'diterima']);
            // yang nullable() buat sementara aja
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('member_programs');
    }
};
