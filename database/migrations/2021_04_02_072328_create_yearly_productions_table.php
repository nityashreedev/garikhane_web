<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYearlyProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yearly_productions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('karmabhomi_id')->nullable();
            $table->string('product');
            $table->string('qty');
            $table->string('price');
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
        Schema::table('yearly_productions', function(BluePrint $table){
            $table->dropForeign(['karmabhomi_id']);
        });
        Schema::dropIfExists('yearly_productions');
    }
}
