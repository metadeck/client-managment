<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientManagerSectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_manager_sectors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('client_manager_client_sector', function (Blueprint $table) {
            $table->unsignedBigInteger('client_manager_client_id');
            $table->unsignedBigInteger('client_manager_sector_id');
            $table->integer('order')->default(0);
            $table->primary(['client_manager_client_id', 'client_manager_sector_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_manager_sectors');
        Schema::dropIfExists('client_manager_client_sector');
    }
}
