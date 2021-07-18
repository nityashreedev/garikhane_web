<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFixedCapitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fixed_capitals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('karmabhomi_id')->nullable();
            $table->string('fixed_property');
            $table->string('approx_price');
            $table->string('details');
            $table->string('remarks');
            $table->timestamps();

            $table->foreign('karmabhomi_id')
            ->references('id')
            ->on('karmabhomi')
            ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fixed_capitals', function(Blueprint $table){
            $table->dropForeign(['karmabhomi_id']);
        });
        Schema::dropIfExists('fixed_capitals');
    }
}
