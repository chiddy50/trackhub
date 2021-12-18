<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('lastname', 100);
            $table->string('firstname', 100);
            $table->string('phone', 100);
            $table->string('email', 150);
            $table->foreignId('country_id');
            $table->foreignId('state_id');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('otp_code', 10)->nullable();
            $table->datetime('date_registered');
            $table->string('display_image', 150)->nullable();
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
        Schema::dropIfExists('users_information');
    }
}
