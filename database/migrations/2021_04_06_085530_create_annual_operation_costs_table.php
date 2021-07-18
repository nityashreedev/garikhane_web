<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnualOperationCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annual_operation_costs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('karmabhomi_id')->nullable();
            $table->string('name');
            $table->string('approx_price');
            $table->string('approx_annual_sale');
            $table->string('total_expense');
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
        Schema::table('annual_operation_costs', function(Blueprint $table){
            $table->dropForeign(['karmabhomi_id']);
        });
        Schema::dropIfExists('annual_operation_costs');
    }
}
