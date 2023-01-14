<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyUmetnik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('slikas', function (Blueprint $table) {
            $table->after('muzej_id', function ($table) {
                $table->foreignId('umetnik_id')->constrained('umetniks');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('slikas', function (Blueprint $table) {
            //
        });
    }
}
