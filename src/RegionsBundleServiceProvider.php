<?php

namespace Naiveable\RegionsBundle;

use Naiveable\Foundation\Bundle\BundleServiceProvider;
use Naiveable\Foundation\Ofcold;
use Naiveable\RegionsBundle\Region\Resources\Region;
use Naiveable\Routing\Facades\Route;

/**
 * class RegionsBundleServiceProvider
 *
 * PHP business application development core system
 *
 * This content is released under the Business System Toll License (MST)
 *
 * @link     https://ofcold.com
 * @link     https://naiveable.com
 *
 * @author   Bill Li (bill.li@ofcold.com) [Owner]
 *
 * @license https://licenses.naiveable.com/mst  MST License
 *
 * @copyright  Copyright (c) 2017-2019 Bill Li, Ofcold Institute of Technology. All rights reserved.
 */
class RegionsBundleServiceProvider extends BundleServiceProvider
{
	/**
	 * This namespace is applied to your controller routes.
	 *
	 * In addition, it is set as the URL generator's root namespace.
	 *
	 * @var string
	 */
	protected $namespace = 'Naiveable\RegionsBundle\Http\Controllers';

	/**
	 * Bootstrap any package services.
	 *
	 * @return void
	 */
	public function boot(): void
	{
		$this->resources();

		$this->cards();
		$this->tools();
	}

	/**
	 * Register the application's Ofcold resources.
	 *
	 * @return void
	 */
	protected function resources()
	{
		Ofcold::resources([
			Region::class
		]);
	}

	/**
	 * Get the tools that should be listed in the Ofcold sidebar.
	 *
	 * @return array
	 */
	public function tools()
	{
		// Ofcold::provideToScript([
		// 	'resources' => function (Request $request) {
		// 		return Ofcold::resourceInformation($request);
		// 	},
		// ]);
	}

	/**
	 * Get the cards that should be displayed on the Nova dashboard.
	 *
	 * @return array
	 */
	protected function cards()
	{
		// return Ofcold::cards([
		// 	new Cards\Help
		// ]);
	}

	/**
	 * Register the Ofcold regions routes.
	 *
	 * @return $this
	 */
	public function getRoutes()
	{
		Route::namespace($this->getNamespace())
			->domain(config('app.domain.app', null))
			->as('naiveable.bundle.regions::region.')
			->middleware('app')
			->group(function () {
				Route::get('regions', 'RegionsController@index');
			});
	}
}
