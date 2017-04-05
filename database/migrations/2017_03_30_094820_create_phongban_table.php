<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhongbanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phongban', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('MaPB',255);
            $table->string('TenPB',255);
            $table->string('DiaChiPB',255);
            $table->string('SDTPB',255);
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
        Schema::drop('phongban');
    }
}
