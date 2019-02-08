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
            $table->unsignedInteger('company_id');
            $table->string('title');
            $table->text('description');
            $table->text('short_description');
            $table->enum('status', [
                'open',
                'filed',
                'closed',
                'expired'
            ]);
            $table->enum('type', [
                'internship',
                'temporary',
                'fulltime',
                'parttime',
                'freelance',
                'contract'
            ])->default('fulltime');
            $table->boolean('recruiter')->default(false)->nullable(false);
            $table->string('location');
            $table->string('website');
            $table->string('experience_range')->nullable(false);
            $table->string('salary_range')->nullable(false);
            $table->boolean('remote_available')->nullable(false)->default(false);

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
