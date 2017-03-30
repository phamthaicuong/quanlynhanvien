<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTdhocvanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tdhocvan', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('MaTDHV');
            $table->string('TrinhDoHV');
            $table->string('ChuyenNganh');
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
        Schema::drop('tdhocvan');
    }
}
