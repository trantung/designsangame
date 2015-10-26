<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GroupPermissions extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('group_permissions', function(Blueprint $table) {
        $table->increments('id');
        $table->string('name',256)->nullable();
        $table->integer('role_id');
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
        Schema::drop('group_permissions');
		
	}

}
