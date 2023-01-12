<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

return new class extends Migration
{
    use SoftDeletes;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pull_riphs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('npwp')->unique();
            $table->string('keterangan')->nullable();
            $table->string('nama')->nullable();
            $table->string('no_ijin')->nullable();
            $table->integer('periodetahun')->nullable();
            $table->date('tgl_ijin')->nullable();
            $table->date('tgl_akhir')->nullable();
            $table->string('no_hs')->nullable();
            $table->float('volume_riph')->nullable();
            $table->float('volume_produksi')->nullable();
            $table->float('luas_wajib_tanam')->nullable();
            $table->integer('status')->nullable();
            $table->string('formRiph')->nullable();
            $table->string('formSptjm')->nullable();
            $table->string('logBook')->nullable();
            $table->string('formRt')->nullable();
            $table->string('formRta')->nullable();
            $table->string('formRpo')->nullable();
            $table->string('formLa')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pull_riphs');
    }
};
