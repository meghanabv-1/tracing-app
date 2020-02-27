<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBackendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backends', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('employee_id')->nullable();
            $table->string('name')->nullable();
            $table->string('name_m')->nullable();
            $table->string('name_l')->nullable();

            $table->string('father')->nullable();
            $table->string('father_m')->nullable();
            $table->string('father_l')->nullable();

            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('department')->nullable();

            $table->string('house')->nullable();
            $table->string('house_no')->nullable();
            $table->string('area')->nullable();
            $table->string('area_p')->nullable();
            $table->string('town')->nullable();
            $table->string('town_p')->nullable();
            $table->string('district')->nullable();
            $table->string('district_p')->nullable();
            $table->string('landmark')->nullable();
            $table->string('landmark_p')->nullable();
            $table->string('pincode')->nullable();
            $table->string('pincode_p')->nullable();
            $table->string('state')->nullable();
            $table->string('state_p')->nullable();
            $table->string('location')->nullable();
            $table->string('location_p')->nullable();


            $table->string('mobile_no')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile_nop')->nullable();
            $table->string('pan_no')->nullable();
            $table->string('confirmation')->nullable();
            $table->string('account_no')->nullable();
            $table->string('aadhar')->nullable();
            $table->string('dra_no')->nullable();
            $table->string('pvc')->nullable();
            $table->string('designation')->nullable();
            $table->date('doj')->nullable();
            $table->string('resume')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('backends');
    }
}
