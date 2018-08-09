<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1521829676ContactCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contact_companies', function (Blueprint $table) {
            if(Schema::hasColumn('contact_companies', 'address')) {
                $table->dropColumn('address');
            }
            if(Schema::hasColumn('contact_companies', 'website')) {
                $table->dropColumn('website');
            }
            if(Schema::hasColumn('contact_companies', 'email')) {
                $table->dropColumn('email');
            }
            
        });
Schema::table('contact_companies', function (Blueprint $table) {
            
if (!Schema::hasColumn('contact_companies', 'logo')) {
                $table->string('logo')->nullable();
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
        Schema::table('contact_companies', function (Blueprint $table) {
            $table->dropColumn('logo');
            
        });
Schema::table('contact_companies', function (Blueprint $table) {
                        $table->string('address')->nullable();
                $table->string('website')->nullable();
                $table->string('email')->nullable();
                
        });

    }
}
