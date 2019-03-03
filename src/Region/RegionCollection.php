<?php

namespace Naiveable\RegionsBundle\Region;

use Naiveable\Database\Eloquent\Collection;
use Naiveable\Filesystem\Facades\Storage;

/**
 * class RegionCollection
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
class RegionCollection extends Collection
{
	public function imagUrl()
	{
		return $this->map(function(RegionModel $entry) {
			$entry->setAttribute('image_url', Storage::disk('local')->url($entry->getAttribute('image')));

			return $entry;
		});
	}
}
