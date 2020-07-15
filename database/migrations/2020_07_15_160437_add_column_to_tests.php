<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToTests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sample', function (Blueprint $table) {

            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sample', function (Blueprint $table) {
            $table->timestamp('updated_at')->useCurrent()->nullable();
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->softDeletes();
            //
        });
    }
}
