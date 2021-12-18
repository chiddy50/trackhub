<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourierMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courier_merchants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('country_id')->nullable();
            $table->foreignId('state_id')->nullable();
            $table->string('company_name', 100)->nullable();
            $table->string('company_address', 150)->nullable();
            $table->string('company_phone', 60)->nullable();
            $table->string('working_opening_time', 60)->nullable();
            $table->string('working_closing_time', 100)->nullable();
            $table->string('cac_number', 10)->nullable();
            $table->string('cac_document_path', 200)->nullable();
            $table->boolean('activated')->default(0);
            $table->integer('fleet_rate_limit')->nullable();
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
        Schema::dropIfExists('courier_merchants');
    }
}
