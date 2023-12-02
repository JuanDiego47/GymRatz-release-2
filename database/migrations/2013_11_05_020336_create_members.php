<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class members extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function(Blueprint $table){

            $table->id('id_Miembro');
            $table->unsignedBigInteger('id_profile');
            $table->string("nombre_Miembro");
            $table->string("apellido_Miembro");
            $table->string("correo_Miembro")->unique();
            $table->string("telefono_Miembro");
            $table->string("estadoMembresia_Miembro");
            $table->string("member_user")->unique();
            $table->string("member_password");
            $table->timestamps();


            $table->foreign('id_profile')->references('id')->on('profiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
