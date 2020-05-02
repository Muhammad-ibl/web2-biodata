<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBiodata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_biodata', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',50);
            $table->text('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin',20);
            $table->string('agama',15);
            $table->text('alamat');
            $table->string('status',15);
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
        Schema::dropIfExists('table_biodata');
    }
}
