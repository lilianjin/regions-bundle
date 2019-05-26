<?php

namespace Naiveable\RegionsBundle;

use Naiveable\Foundation\Http\Domain;
use Naiveable\RegionsBundle\Region\Resources\Region;
use Naiveable\Routing\Facades\Route;
use Naiveable\Support\Contracts\RouteableProviderInterface;
use Naiveable\Support\ServiceProvider;

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
class RegionsBundleServiceProvider extends ServiceProvider implements RouteableProviderInterface
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
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register(): void
	{
		$this->registerBundle('naiveable.bundle.regions', __DIR__);

		// Load package configuration.
		$this->addNamespaceForConfig($this->bundle->getNamespace(), $this->bundle->getPath('resources/config'));

		// Add the view namespaces.
		$this->addNamespaceForView($this->bundle->getNamespace(), $this->bundle->getPath('resources/views'));

		// Register a database migration path.
		$this->loadMigrationsFrom($this->bundle->getPath('database/migrations'));
	}

	/**
	 * Bootstrap any package services.
	 *
	 * @return void
	 */
	public function boot(): void
	{
		$this->translatorRegister();

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
	public function map()
	{
		Route::namespace($this->getNamespaceForApp())
			->domain(Domain::route('api'))
			->as('naiveable.bundle.regions::region.')
			->middleware('app')
			->group(function () {
				Route::get('regions', 'RegionsController@index');
			});
	}

	/**
	 * Register translation namespace any bundle services.
	 *
	 * @return void
	 */
	public function translatorRegister(): void
	{
		$path = $this->bundle->getPath('resources/lang');

		// Load package translator.
		$this->loadTranslationsFrom($path, $this->bundle->getNamespace());
		$this->loadJsonTranslationsFrom($path);
	}
}
