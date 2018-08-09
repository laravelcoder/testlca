<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1525481589BookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            if(Schema::hasColumn('bookings', 'submitted')) {
                $table->dropColumn('submitted');
            }
            if(Schema::hasColumn('bookings', 'requested_date')) {
                $table->dropColumn('requested_date');
            }
            if(Schema::hasColumn('bookings', 'requested_time')) {
                $table->dropColumn('requested_time');
            }
            
        });
Schema::table('bookings', function (Blueprint $table) {
            
if (!Schema::hasColumn('bookings', 'requested_date')) {
                $table->string('requested_date')->nullable();
                }
if (!Schema::hasColumn('bookings', 'requested_time')) {
                $table->string('requested_time')->nullable();
                }
if (!Schema::hasColumn('bookings', 'submitted')) {
                $table->string('submitted')->nullable();
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
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('requested_date');
            $table->dropColumn('requested_time');
            $table->dropColumn('submitted');
            
        });
Schema::table('bookings', function (Blueprint $table) {
                        $table->date('submitted')->nullable();
                $table->date('requested_date')->nullable();
                $table->time('requested_time')->nullable();
                
        });

    }
}
