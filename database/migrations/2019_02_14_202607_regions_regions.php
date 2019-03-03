<?php

use Naiveable\Database\Facades\Schema;
use Naiveable\Database\Schema\Blueprint;
use Naiveable\Database\Migrations\Migration;

/**
 * Class RegionsRegions
 *
 * PHP business application development core system
 *
 * This content is released under the Business System Toll License (MST)
 *
 * @link	 https://ofcold.com
 * @link	 https://naiveable.ofcold.com
 *
 * @author	 Ofcold Naiveable Team (naiveable@ofcold.com)
 * @author	 Bill Li (bill.li@ofcold.com)
 *
 * @license	https://dev.ofcold.com/licenses  MST License
 *
 * @copyright  Copyright (c) 2017-2018 Ofcold Institute of Technology. All rights reserved.
 */
class RegionsRegions extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('regions_regions', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name')->unique();
			$table->string('slug')->unique();
			$table->string('slogan')->nullable();
			$table->string('description')->nullable();
			$table->string('image');
			$table->string('meta_title', 200)->nullable();
			$table->string('meta_description')->nullable();
			$table->integer('star')->nullable();
			$table->integer('unstar')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('regions_regions');
	}
}
