<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1523057169ApiTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('api_tests')) {
            Schema::create('api_tests', function (Blueprint $table) {
                $table->increments('id');
                $table->string('submitted_user_city')->nullable();
                $table->string('submitted_user_state')->nullable();
                $table->string('name')->nullable();
                $table->string('subject')->nullable();
                $table->string('message')->nullable();
                
                $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
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
        Schema::dropIfExists('api_tests');
    }
}
