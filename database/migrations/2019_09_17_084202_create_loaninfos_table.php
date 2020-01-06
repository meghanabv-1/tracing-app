<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaninfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaninfos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bankname')->nullable();
            $table->string('loan_application_no')->nullable();
            $table->string('cust_name')->nullable();
            $table->string('teamlead')->nullable();
            $table->string('month')->nullable();
            $table->string('pos')->nullable();
            $table->string('status')->nullable();
            $table->string('mobile')->nullable();

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
        Schema::dropIfExists('loaninfos');
    }
}
