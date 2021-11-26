<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddcolumnDileveryTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('delivery_types', function (Blueprint $table) {
            $table->string('ar_title_Up');
            $table->string('en_title_Up');
            $table->string('ar_title_down');
            $table->string('en_title_down');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('delivery_types', function (Blueprint $table) {
            $table->dropColumn('ar_title_Up');
            $table->dropColumn('en_title_Up');
            $table->dropColumn('ar_title_down');
            $table->dropColumn('en_title_down');
        });
    }
}
