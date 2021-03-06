<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeAdresaToAdresaDostaveInPorudzbinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('porudzbenicas', function (Blueprint $table) {
            $table->renameColumn('adresa','adresaDostave');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('porudzbenicas', function (Blueprint $table) {
            $table->renameColumn('adresaDostave','adresa');
        });
    }
}
