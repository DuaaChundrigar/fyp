<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->references('id')->on('students');
            $table->foreignId('book_id')->references('id')->on('books');
            // $table->foreingId('book_name')->refrences('id')->on('books');
            $table->string('checkin_datetime')->nullable();
            $table->string('checkout_datetime')->nullable();
            $table->string('duration')->default('7');
            $table->string('status')->comment('pending, approved, checkin, checkout , rejected');
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
        Schema::dropIfExists('bookings');
    }
}
