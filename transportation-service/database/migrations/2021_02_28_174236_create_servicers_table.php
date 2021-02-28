<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicers', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('username');
            $table->longText('description');
            $table->integer('age');
            $table->integer('nip');
            $table->integer('telephone');
            $table->integer('bank_account');
            $table->longText('address');
            $table->binary('vehicle_photo');
            $table->integer('enrollment');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('servicers');
    }
}
