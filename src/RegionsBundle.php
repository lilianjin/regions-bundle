<?php

namespace Naiveable\RegionsBundle;

use Naiveable\Foundation\Bundle\Bundle;

/**
 * class RegionsBundle
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
class RegionsBundle extends Bundle
{
	/**
	 * The navigation display flag.
	 *
	 * @var  bool
	 */
	protected $navigation = true;

	/**
	 * The addon icon.
	 *
	 * @var  string
	 */
	protected $icon = 'globe-asia';

	/**
	 * The bundle's sections.
	 *
	 * @var string|array
	 */
	protected $sections = [
		[
			'slug'			=> 'regions',
			'uriKey'		=> 'regions',
			'component'		=> 'index',
			'singularLabel'	=> 'Regions'
		],
	];
}
