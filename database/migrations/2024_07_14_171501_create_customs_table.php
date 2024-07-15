<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customs', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('alamat');
            $table->string('payment_method');
            $table->string('payment_status');
            $table->string('status');
            $table->string('kain');
            $table->string('lengan');
            $table->string('model');
            $table->string('penerapan_kain');
            $table->string('jumlah');
            $table->string('lebar_pundak');
            $table->string('lebar_dada');
            $table->string('panjang_baju');
            $table->string('panjang_tangan');
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
        Schema::dropIfExists('customs');
    }
}
