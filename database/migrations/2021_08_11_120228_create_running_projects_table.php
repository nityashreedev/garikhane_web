<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRunningProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('running_projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('loan_type');
            $table->mediumText('project_name');
            $table->mediumText('project_type');
            $table->string('project_amount');
            $table->string('loan_amount');
            $table->string('loan_taken_by');
            $table->string('location');
            $table->string('loan_date');
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
        Schema::dropIfExists('running_projects');
    }
}