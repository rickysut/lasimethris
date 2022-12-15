<?php

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
        Schema::create('riph_admins', function (Blueprint $table) {
            $table->id();
            $table->integer('v_pengajuan_import');
            $table->integer('v_beban_tanam');
            $table->integer('v_beban_produksi');
            $table->integer('jumlah_importir');
            $table->integer('periode');
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
        Schema::dropIfExists('riph_admins');
    }
};
