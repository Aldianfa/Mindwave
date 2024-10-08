<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelfdiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selfdiaries', function (Blueprint $table) {
            $table->unsignedBigInteger('id_diary')->autoIncrement();
            $table->string('judul');
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('penggunas');
            $table->text('isi');
            $table->date('tanggal');
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
        Schema::dropIfExists('selfdiaries');
    }
}
