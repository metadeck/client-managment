<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientManagerTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_manager_testimonials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('client_manager_client_id');
            $table->string('employee_name');
            $table->string('employee_position');
            $table->text('content');
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
        Schema::dropIfExists('client_manager_testimonials');
    }
}
