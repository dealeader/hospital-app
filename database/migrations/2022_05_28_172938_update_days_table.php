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
        Schema::table('days', function (Blueprint $table) {
            $table->dropForeign(['patient_id']);
            $table->foreignId('patient_id')->nullable()->change();

            $table->boolean('isFree')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('days', function (Blueprint $table) {
            $table->foreignId('patient_id')->constrained('users')->change();
            $table->dropColumn('IsFree');
            $table->boolean('IsFree');
        });
    }
};
