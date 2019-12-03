<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CommentairesClients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaires_clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('commentaire');
            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')->references('id')->on('clients');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('commentaires_clients');
        
        Schema::table('commentaires_clients', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['id_client']);
            $table->dropIfExists('id_client');
        
        });
    }
}
