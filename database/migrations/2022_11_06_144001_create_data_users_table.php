<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->unique();
            $table->string('name');
            $table->string('mobile_phone');
            $table->string('fix_phone')->nullable();
            $table->string('company_name');
            $table->string('pic_name');
            $table->string('jabatan');
            $table->string('npwp_company');
            $table->string('nib_company');
            $table->string('address_company');
            $table->string('provinsi')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('desa')->nullable();
            $table->string('kodepos')->nullable();
            $table->string('fax')->nullable();
            $table->string('ktp')->nullable();
            $table->string('ktp_image')->nullable();
            $table->string('assignment')->nullable();
            $table->string('avatar')->nullable();
            $table->string('logo')->nullable();
            $table->string('email_company')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_users');
    }
};
