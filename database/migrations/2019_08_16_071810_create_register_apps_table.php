<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_apps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('app_name')->nullable();
            $table->string('token')->nullable();
            $table->string('secret')->nullable();
            $table->json('public_type_file')->nullable();
            $table->json('private_type_file')->nullable();
            $table->string('size')->nullable();
            $table->boolean('year_folder')->default(0);
            $table->boolean('month_folder')->default(0);
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
        Schema::dropIfExists('register_apps');
    }
}
