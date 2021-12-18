<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiderInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rider_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rider_id');
            $table->foreignId('vehicle_type_id');
            $table->string('plate_number', 20);
            $table->string('licence_path', 150);
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
        Schema::dropIfExists('rider_information');
    }
}
