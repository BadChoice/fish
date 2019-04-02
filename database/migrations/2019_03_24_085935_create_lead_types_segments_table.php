<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadTypesSegmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('lead_types_segments');
        Schema::create('lead_types_segments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lead_type_id')->unsigned();
            $table->string('name');
            $table->string('class_helper');
            $table->integer('order');
            $table->timestamps();
            $table->foreign('lead_type_id')->references('id')->on('lead_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lead_types_segments');
    }
}
