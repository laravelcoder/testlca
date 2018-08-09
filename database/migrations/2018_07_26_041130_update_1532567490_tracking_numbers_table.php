<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1532567490TrackingNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tracking_numbers', function (Blueprint $table) {
            
if (!Schema::hasColumn('tracking_numbers', 'callmetric_filter_id')) {
                $table->string('callmetric_filter_id')->nullable();
                }
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tracking_numbers', function (Blueprint $table) {
            $table->dropColumn('callmetric_filter_id');
            
        });

    }
}
