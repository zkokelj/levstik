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
            $table->text('year');
            $table->text("short_info");
            $table->mediumText('image1')->nullable();
            $table->mediumText('image2')->nullable();
            $table->text('description');
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
