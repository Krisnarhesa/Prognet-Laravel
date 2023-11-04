<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('formulirs', function (Blueprint $table) {
            $table->id();
            $table->string('Fullname');
            $table->string('NickName');
            $table->string('Nim');
            $table->string('Faculty')->default('Faculty of Science');
            $table->string('Email');
            $table->string('Password');
            $table->date('Date_of_birth');
            $table->string('Address');
            $table->enum('Gender',['Male', 'Female'])->default('Male');
            $table->string('Experience');
            $table->text('Describe_yourself');
            $table->string('Favorite_color');
            $table->integer('Skills_range');
            $table->binary('Profile_picture');
            $table->string('Terms');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulirs');
    }
};
