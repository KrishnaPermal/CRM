<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeingKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->unsignedBigInteger('id_adresse');
            $table->foreign('id_adresse')->references('id')->on('adresses');
        });

        Schema::table('contacts', function (Blueprint $table) {
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
        Schema::table('clients', function (Blueprint $table) {
            //disable contraninte
            //drop foreing key
            // drop champ
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['id_adresse']);
            $table->dropIfExists('id_adresse');
        });


        Schema::table('contacts', function (Blueprint $table) {
            //disable contraninte
            //drop foreing key
            // drop champ
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['id_client']);
            $table->dropIfExists('id_client');
        });
    }
}
