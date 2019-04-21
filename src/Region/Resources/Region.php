<?php

namespace Naiveable\RegionsBundle\Region\Resources;

use Naiveable\Fields\Image;
use Naiveable\Fields\Slug;
use Naiveable\Fields\Tabs;
use Naiveable\Fields\Text;
use Naiveable\Fields\Textarea;
use Naiveable\Foundation\Panel;
use Naiveable\Foundation\Resource;
use Naiveable\Http\Request;
use Naiveable\RegionsBundle\Region\RegionModel;

/**
 * class Region
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
class Region extends Resource
{
	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static $model = RegionModel::class;

	/**
	 * The single value that should be used to represent the resource when being displayed.
	 *
	 * @var string
	 */
	public static $title = 'name';

	/**
	 * The columns that should be searched.
	 *
	 * @var array
	 */
	public static $search = [
		'name'
	];

	/**
	 * Indicates if the resoruce should be globally searchable.
	 *
	 * @var bool
	 */
	public static $globallySearchable = false;

	/**
	 * Get the fields displayed by the resource.
	 *
	 * @param  \Naiveable\Http\Request  $request
	 *
	 * @return array
	 */
	public function fields(Request $request)
	{
		return [
			Image::make('Image', 'image'),

			Text::make(__('Name'), 'name')
				->slug('Slug')
				->sortable()
				->rules('required', 'max:20'),

			Slug::make('slug')
				->onlyOnForms()
				->hideWhenUpdating()
				->rules('required', 'max:100')
				->creationRules(['unique:regions_regions,slug']),

			Text::make(__('Slogan'), 'slogan'),

			Textarea::make(__('Description'), 'description'),

			new Panel('Meta', [
				Text::make('Meta title', 'meta_title')->hideFromIndex(),
				Text::make('Meta description', 'meta_description')->hideFromIndex(),
			])

		];
	}

	/**
	 * Get the cards available for the request.
	 *
	 * @param  \Naiveable\Http\Request  $request
	 *
	 * @return array
	 */
	public function cards(Request $request)
	{
		return [

		];
	}

	/**
	 * Get the filters available for the resource.
	 *
	 * @param  \Naiveable\Http\Request  $request
	 *
	 * @return array
	 */
	public function filters(Request $request)
	{
		return [
		];
	}

	/**
	 * Get the lenses available for the resource.
	 *
	 * @param  \Naiveable\Http\Request  $request
	 *
	 * @return array
	 */
	public function lenses(Request $request)
	{
		return [
		];
	}

	/**
	 * Get the actions available for the resource.
	 *
	 * @param  \Naiveable\Http\Request  $request
	 *
	 * @return array
	 */
	public function actions(Request $request)
	{
		return [
		];
	}
}
