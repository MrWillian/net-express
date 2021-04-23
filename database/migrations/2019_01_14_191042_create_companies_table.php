<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name', 140);
            $table->string('fantasy', 140);
            $table->string('email', 128);
            $table->string('site', 128);
            $table->string('document', 18);
            $table->string('phone_number', 20);
            $table->string('state_registration', 14);
            $table->string('responsible_name', 100);
            $table->string('responsible_office', 80);
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
        Schema::dropIfExists('companies');
    }
}
