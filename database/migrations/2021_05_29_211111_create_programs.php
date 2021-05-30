<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrograms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('programs')) {
            Schema::table('programs', function (Blueprint $table) {
                if (!Schema::hasColumn('idProgram')) {
                    $table->increments('idProgram');
                }

                if (!Schema::hasColumn('nameProgram')) {
                    $table->string('nameProgram', 255);
                }

                if (!Schema::hasColumn('genre')) {
                    $table->string('genre', 255);
                }

                if (!Schema::hasColumn('chapters')) {
                    $table->integer('chapters');
                }

                if (!Schema::hasColumn('month')) {
                    $table->integer('month');
                }
            });
        } else {
            Schema::create('programs', function (Blueprint $table) {
                $table->increments('idProgram');
                $table->string('nameProgram', 255);
                $table->string('genre', 255);
                $table->integer('chapters');
                $table->integer('month');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('programs', function (Blueprint $table) {
            Schema::drop('programs');
        });
    }
}
