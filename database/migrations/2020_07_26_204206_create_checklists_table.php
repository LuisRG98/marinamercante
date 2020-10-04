<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChecklistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checklists', function (Blueprint $table) {
            $table->id();
            $table->json('m')->nullable();
            $table->json('properties');
            $table->json('d')->nullable();
            $table->float('pntj');
            $table->string('estado');
            $table->unsignedBigInteger('emb_id');
            $table->timestamps();
            $table->foreign('emb_id')->references('id')->on('embs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checklists');
    }
}
