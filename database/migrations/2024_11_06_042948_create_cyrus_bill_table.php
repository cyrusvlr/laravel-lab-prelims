<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cyrus_bill', function (Blueprint $table) {
            $table->id();
            $table->string('Firstname');
            $table->string('Lastname');
            $table->char('Middle_Initial', 1);
            $table->string('Email');
            $table->bigInteger('Contact_No');
            $table->string('Street');
            $table->string('City');
            $table->string('Province');
            $table->string('Country');
            $table->integer('ZIP');
            $table->integer('No_of_watts');
            $table->string('Sub_Type');
            $table->double('Energy_charge');
            $table->double('Disconnection');
            $table->double('Late_Payment');
            $table->double('Total_Bill');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cyrus_bill');
    }
};
