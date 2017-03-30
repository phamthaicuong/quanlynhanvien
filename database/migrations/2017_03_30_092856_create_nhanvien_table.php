<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhanvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('HoTen');
            $table->string('GioiTinh');
            $table->dateTime('NgaySinh');
            $table->string('DiaChi');
            $table->string('SDT');
            $table->string('QueQuan');
            $table->string('MucLuong');
            $table->string('PhongBan');
            $table->string('TDHocVan');
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
        Schema::drop('nhanvien');
    }
}
