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
        Schema::create('users_1' , function(Blueprint $table)
        {
            $table->bigInteger('id')->autoIncrement();
            $table->string('username',120);
            $table->string('email',50);
            $table->string('gender',50);
            $table->string('dob',50);
            $table->bigInteger('category_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
