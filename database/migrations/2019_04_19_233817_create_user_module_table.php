<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_module', function (Blueprint $table) {
            $table->biginteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->biginteger('module_id')->unsigned();
            $table->foreign('module_id')->references('module_id')->on('modules')->onDelete('cascade');
            $table->biginteger('assigned_by')->unsigned();
            $table->foreign('assigned_by')->references('id')->on('users')->onDelete('cascade');
            $table->integer('grade');
            $table->date('assigned');
            $table->date('due');
            $table->date('completed');
            $table->string('report_link');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_module');
    }
}
