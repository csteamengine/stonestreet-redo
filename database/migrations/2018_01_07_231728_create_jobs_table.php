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
            $table->string('title');
            $table->string('company');
            $table->string('titledescription')->nullable($value = true);
            $table->string('companydescription')->nullable($value = true);
            $table->string('companyphone')->nullable($value = true);
            $table->string('companywebsite')->nullable($value = true);
            $table->string('short')->nullable($value = true);
            $table->text('description')->nullable($value = true);
            $table->integer('imageid')->nullable($value = true);
            $table->date('fromdate');
            $table->date('todate');
            $table->boolean('iscurrent')->default(0);
            $table->boolean('isactive')->default(1);
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
