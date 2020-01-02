<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLevstikWinnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('levstik_winners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->string('full_name_id');
            $table->text('year');
            $table->string("short_info");
            $table->string("short_info_en");
            $table->string("short_info_ch");
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->text('description');
            $table->text('description_en');
            $table->text('description_ch');
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
        Schema::dropIfExists('levstik_winners');
    }
}
