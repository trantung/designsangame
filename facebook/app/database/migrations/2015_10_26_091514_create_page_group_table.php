<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageGroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('page_group', function(Blueprint $table) {
        $table->increments('id');
        $table->string('name',256)->nullable();
        $table->integer('page_id');
        $table->integer('group_permission_id');
        $table->softDeletes();
        $table->timestamps();
        }); 
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('page_group');
	}

}
