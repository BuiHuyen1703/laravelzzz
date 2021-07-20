<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddApproveToLegalOff extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('legal_off', function (Blueprint $table) {
            Schema::table('legal_off', function (Blueprint $table) {
                $table->int("approve")->default(null);
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
        Schema::table('legal_off', function (Blueprint $table) {
            Schema::table('legal_off', function (Blueprint $table) {
                $table->dropColumn("approve ")->default(null);
            });
        });
    }
}
