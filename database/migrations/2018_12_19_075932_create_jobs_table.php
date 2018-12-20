<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {

            $table->increments('id');
            $table->string('job_title');
            $table->string('job_company');
            $table->string('job_profile');
            $table->string('job_experience');
            $table->string('job_salary');
            $table->string('job_type');
            $table->string('job_category');
            $table->string('job_location');
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
        Schema::dropIfExists('jobs');
    }
}
