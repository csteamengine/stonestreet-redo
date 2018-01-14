<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('short', 250)->nullable($value = true);
            $table->text('description')->nullable($value = true);
            $table->integer('imageid')->nullable($value = true);
            $table->integer('categoryid')->nullable($value = true);
            $table->string('projectwebsite')->nullable($value = true);
            $table->string('projectgithub')->nullable($value = true);
            $table->date('projectstart');
            $table->date('projectend');
            $table->boolean('iscompleted')->default(0);
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
        Schema::dropIfExists('projects');
    }
}
