<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('email', 128);
            $table->date('birthday')->nullable();
            $table->string('phone_number', 20);
            $table->enum('client_type', [1, 2]);
            $table->enum('gender', ["M", "F"])->nullable();
            $table->string('rg', 12);
            $table->string('document', 18);
            $table->string('cep', 11);
            $table->string('country', 60);
            $table->string('state', 60);
            $table->string('city', 60);
            $table->string('district', 60);
            $table->string('place', 90)->nullable();
            $table->string('number', 10);

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
        Schema::dropIfExists('clients');
    }
}
