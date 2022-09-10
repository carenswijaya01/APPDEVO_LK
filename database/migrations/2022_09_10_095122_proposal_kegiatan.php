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
        Schema::create('proposal_kegiatans', function (Blueprint $table) {
            $table->id();
            $table->string('file');
            $table->text('description');
            $table->foreignId('admin_id')->constrained();
            $table->foreignId('role_id')->constrained();
            $table->enum('status', ['revisi', 'fix', 'terkirim'])->default('terkirim');
            $table->integer('many_revisi')->default(0);
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
        Schema::dropIfExists('proposal_kegiatans');
    }
};
