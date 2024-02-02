<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('code',10)->comment('รหัสพนักงาน');
            $table->string('fname')->comment('ชื่อจริง');
            $table->string('lname')->comment('นามสกุล');
            $table->string('age',10)->comment('อายุ');
            $table->string('gender',10)->comment('เพศ');
            $table->string('phone',10)->comment('เบอร์โทรศัพท์');
            $table->text('address')->comment('ที่อยู่');
            $table->string('province')->comment('จังหวัด');
            $table->string('Subdistrict')->comment('ตำบล');
            $table->string('district')->comment('อำเภอ');
            $table->string('zipcode')->comment('รหัสไปรษณีย์');
            $table->bigInteger('status')->comment('สถานะ');
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
        Schema::dropIfExists('employees');
    }
}
