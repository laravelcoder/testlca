<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5b68fe0523b81RelationshipsToAnalyticTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('analytics', function(Blueprint $table) {
            if (!Schema::hasColumn('analytics', 'website_id')) {
                $table->integer('website_id')->unsigned()->nullable();
                $table->foreign('website_id', '135071_5ab96c386b517')->references('id')->on('websites')->onDelete('cascade');
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
        Schema::table('analytics', function(Blueprint $table) {
            if(Schema::hasColumn('analytics', 'website_id')) {
                $table->dropForeign('135071_5ab96c386b517');
                $table->dropIndex('135071_5ab96c386b517');
                $table->dropColumn('website_id');
            }
            
        });
    }
}
