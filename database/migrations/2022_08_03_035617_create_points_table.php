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
        Schema::create('points', function (Blueprint $table) {
            // $table->id();
            $table->integer('point_id')->autoIncrement();
            $table->foreignId('admin_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('file');
            $table->foreignId('type_point_id');
            $table->integer('point');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('points');
    }
};
