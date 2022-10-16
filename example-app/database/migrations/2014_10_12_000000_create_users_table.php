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
        Schema::create('users', function (Blueprint $table) {
            $table->id();//integer unsigned increment
            $table->string('name');//varchar de 100 caracteres , 100
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();//este campo puede quedar vacio propiedad anulable
            $table->string('password'); //contraseña
            $table->rememberToken();//metodo token
            $table->timestamps();//created_a update_at hora fecha de creacion y modificacion 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
