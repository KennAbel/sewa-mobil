<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('user_data', function (Blueprint $table) {
        $table->increments('User_ID'); // Primary key
        $table->string('User_Name', 255);
        $table->string('User_Email', 255);
        $table->string('User_Role', 20)->unique(); // Unique key
        $table->string('User_Password', 255);
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
