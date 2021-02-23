<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTypeImamageToAmbiancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ambiances', function (Blueprint $table) {
            $table->string('type-image')->default('');
            $table->boolean('Photo produit')->default('');
            $table->boolean('Photo humain')->default('');
            $table->boolean('Photo institutionnelle')->default('');
            $table->string('format')->default('');
            $table->string('Credit photo')->default('');
            $table->boolean('Date de fin de droits utilisation')->default('');
            $table->string('Copyright')->default('');
            $table->date('Date de fin de droits utilisation')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ambiances', function (Blueprint $table) {
            $table->dropColum('type-image');
            $table->dropColum('Photo produit');
            $table->dropColum('Photo humain');
            $table->dropColum('Photo institutionnelle');
            $table->dropColum('format');
            $table->dropColum('Credit photo');
            $table->dropColum('Date de fin de droits utilisation');
            $table->dropColum('Copyright');
            $table->dropColum('Date de fin de droits utilisation');
        });
    }
}
