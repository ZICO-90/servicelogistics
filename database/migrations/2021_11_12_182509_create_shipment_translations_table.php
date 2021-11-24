<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('shipment_translations', function (Blueprint $table) {
                $table->id(); // Laravel 5.8+ use bigIncrements() instead of increments()
                $table->string('locale')->index();

                // Foreign key to the main model

                $table->unique(['shipment_id', 'locale']);



                $table->unsignedBigInteger('shipment_id');
                $table->foreign('shipment_id')->references('id')->on('shipments')
                    ->cascadeOnDelete()->cascadeOnUpdate();
                $table->string('shipment_name');
            });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipment_translations');
    }
}
