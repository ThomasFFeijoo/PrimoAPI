<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_photos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('service_detail_id');
            $table->foreign('service_detail_id')->references('service_detail_id')->on('services_details');
            $table->string('url');
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
        Schema::dropIfExists('services_photos');
    }
}
