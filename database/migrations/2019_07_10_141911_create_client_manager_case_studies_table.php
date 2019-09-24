<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientManagerCaseStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_manager_case_studies', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('client_manager_client_id');
            $table->string('title');
            $table->text('preview_content');
            $table->text('content');
            $table->enum('project_type', ['web', 'app'])->default('web');
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
        Schema::drop('client_manager_case_studies');
    }
}
