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
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('organization_id')->nullable();
            $table->unsignedInteger('country_id')->nullable();
            $table->String('title');
            $table->unsignedInteger('skills_required');
            $table->longText('Description');
            $table->string('work_type')->default('on-site');
            $table->string('job_type')->default('full-time');
            $table->string('status')->nullable()->default('open');
            $table->softDeletes();
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
