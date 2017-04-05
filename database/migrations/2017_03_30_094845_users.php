<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name')->index();
            $table->string('email');
            $table->string('password');
            $table->string('quyen');
            $table->string('GioiTinh');
            // $table->dateTime('NgaySinh');
            $table->string('DanToc');
            $table->string('SDT');
            $table->string('QueQuan');
            $table->string('MucLuong');
            $table->string('PhongBan');
            $table->string('TDHocVan');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
