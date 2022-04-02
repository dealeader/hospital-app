<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('days', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('parent_id')->constrained('days');
            $table->foreignId('patient_id')->constrained('users');
            $table->foreignId('category_id')->constrained('categories');

            $table->dateTime('date');
            $table->boolean('isFree');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('days');
    }
};
