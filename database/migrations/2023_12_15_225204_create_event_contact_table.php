<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventContacts', function (Blueprint $table) {
            $table->id('id_rep_cont');
            $table->unsignedInteger('id_event'); 
            $table->unsignedInteger('id_contact'); 
            $table->timestamps();

            // Define foreign key constraints 

            $table->foreign('id_event')->references('id_event')->on('events')->onDelete('cascade'); 

            $table->foreign('id_contact')->references('id_contact')->on('contacts')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventContacts');
    }
};
