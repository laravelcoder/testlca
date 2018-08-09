<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5ab967b1e8d37RelationshipsToContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function(Blueprint $table) {
            if (!Schema::hasColumn('contacts', 'company_id')) {
                $table->integer('company_id')->unsigned()->nullable();
                $table->foreign('company_id', '135003_5ab54697c4a53')->references('id')->on('contact_companies')->onDelete('cascade');
                }
                if (!Schema::hasColumn('contacts', 'clinic_id')) {
                $table->integer('clinic_id')->unsigned()->nullable();
                $table->foreign('clinic_id', '135003_5ab967aebc739')->references('id')->on('clinics')->onDelete('cascade');
                }
                if (!Schema::hasColumn('contacts', 'user_id')) {
                $table->integer('user_id')->unsigned()->nullable();
                $table->foreign('user_id', '135003_5ab54a3b2237b')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('contacts', function(Blueprint $table) {
            
        });
    }
}
