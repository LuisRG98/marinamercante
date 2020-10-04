<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('embs', function (Blueprint $table) {
            $table->id();
            $table->string('id_emb')->unique();
            $table->unsignedBigInteger('user_id');
            $table->string('nom_prop');
            $table->string('ant_prop')->nullable();
            $table->string('nom_emb');
            $table->string('asc_cop');
            $table->string('num_cert');
            $table->string('clase_tipo');
            $table->string('material');
            $table->integer('anio');
            $table->string('serv_emb');
            $table->string('base_op');
            $table->string('matricula');
            $table->float('eslora');
            $table->float('manga');
            $table->float('puntal');
            $table->float('trb');
            $table->float('trn');
            $table->float('francobordo')->nullable();
            $table->string('men_pel');
            $table->integer('num_max');
            $table->string('sist_prop');
            $table->string('marca');
            $table->string('num_mot');
            $table->float('php');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('embs');
    }
}
