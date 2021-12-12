<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_sections', function (Blueprint $table) {
            $table->id();
                      //name for tags
                      $table->string('heading_title_top_P');  
             
                      $table->string('heading_title_H');  
                         
                      $table->longText('heading_title_bottom_P'); 
            
                      $table->boolean('is_active')->default(0); // control in disblay
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services_sections');
    }
}
