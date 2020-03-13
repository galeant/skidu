<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEksekusiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eksekusi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('pekerjaan_id');
            $table->string('bobot_eksekusi');
            $table->string('urutan_durasi');
            $table->boolean('is_perencanaan');
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
        Schema::dropIfExists('eksekusi');
    }
}
