<?php 

 

use Illuminate\Database\Migrations\Migration; 

use Illuminate\Database\Schema\Blueprint; 

use Illuminate\Support\Facades\Schema; 

 

return new class extends Migration 

{ 

    /** 

     * Run the migrations. 

     */ 

    public function up() 

    { 

        Schema::create('partnerSponsors', function (Blueprint $table) { 

            $table->increments('id_sp');  

            $table->string('name');  

            $table->string('email');  

            $table->integer('phone');  


           //$table->string('image');  

            $table->timestamps();  

        }); 

    } 

 

    /** 

     * Reverse the migrations. 

     */ 

    public function down() 

    { 

        Schema::dropIfExists('events'); 

    } 

}; 
