<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LienForeignKeyCommentairesClients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('commentaires_clients', function (Blueprint $table) {
            $table->unsignedBigInteger('id_types_commentaire');
            $table->foreign('id_types_commentaire')->references('id')->on('type_commentaires_clients');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('commentaires_clients', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['id_types_commentaire']);
            $table->dropIfExists('id_types_commentaire');


        });
    }
}
