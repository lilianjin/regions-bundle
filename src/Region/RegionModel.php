<?php

namespace Naiveable\RegionsBundle\Region;

use Naiveable\Database\Eloquent\Model;
use Naiveable\Filesystem\Facades\Storage;

/**
 * class RegionModel
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
class RegionModel extends Model
{
	/**
	 * The database table.
	 *
	 * @var string
	 */
	protected $table = 'regions_regions';

	// public function getImageAttribute()
	// {
	// 	$file = $this->getAttributes();
	// 	return $file;
	// 	//return Storage::disk('local')->url();
	// }

}
