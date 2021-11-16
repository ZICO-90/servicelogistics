<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_translations', function (Blueprint $table) {
            // mandatory fields
            $table->id(); // Laravel 5.8+ use bigIncrements() instead of increments()
            $table->string('locale')->index();

            // Foreign key to the main model

            $table->unique(['customer_id', 'locale']);



            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers')
                ->cascadeOnDelete()->cascadeOnUpdate();


            // Actual fields you want to translate
            $table->string('sender_full_name');
            $table->string('sender_mother_name');
            $table->string('reciver_full_name');
            $table->string('reciver_mother_name');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_translations');
    }
}
