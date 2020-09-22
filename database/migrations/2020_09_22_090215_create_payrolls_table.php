<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payrolls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('staff_id');
            $table->integer('attendance_bonus');
            $table->integer('attendance_deduction');
            $table->integer('other_bonus');
            $table->integer('other_deduction');
            $table->integer('ssb');
            $table->timestamps();

            // Relationship
            $table->foreign('staff_id')
                    ->references('id')
                    ->on('staff')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payrolls');
    }
}
