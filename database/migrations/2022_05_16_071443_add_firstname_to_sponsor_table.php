<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFirstnameToSponsorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sponsor', function (Blueprint $table) {
            $table->string('firstname')->before('image');
            $table->string('lastname')->after('firstname');
            $table->string('supportcatogory');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sponsor', function (Blueprint $table) {
            //
        });
    }
}
