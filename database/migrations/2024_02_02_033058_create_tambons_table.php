<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTambonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tambons', function (Blueprint $table) {
            $table->id();
            $table->string('tambon');
            $table->string('amphoe');
            $table->string('province');
            $table->string('zipcode');
            $table->string('tambon_code');
            $table->string('amphoe_code');
            $table->string('province_code');
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
        Schema::dropIfExists('tambons');
    }
}
