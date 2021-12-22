<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterNavigasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_navigasis', function (Blueprint $table) {
            $table->id();
            $table->string('nav_main', 30)->nullable();
            $table->string('nav_sub', 30)->nullable();
            $table->string('nav_button', 20)->nullable();
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
        Schema::dropIfExists('master_navigasis');
    }
}
