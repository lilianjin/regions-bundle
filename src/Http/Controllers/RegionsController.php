<?php

namespace Naiveable\RegionsBundle\Http\Controllers;

use Naiveable\RegionsBundle\Region\RegionModel;

/**
 * class RegionsController
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
class RegionsController
{
	public function index()
	{
		return response()->json(RegionModel::all()->imagUrl());
	}
}
