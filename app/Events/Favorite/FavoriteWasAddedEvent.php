<?php

/*
 * This file is part of Hifone.
 *
 * (c) until 2016-08-11 Hifone.com <hifone@hifone.com>
 * (c) changes made after 2016-08-11 banncity.de <broxxer@broxxer.de>
 *
 * For the ful copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Hifone\Events\Favorite;

use Hifone\Models\Favorite;

final class FavoriteWasAddedEvent implements FavoriteEventInterface
{
    /**
     * The favorite that has been reported.
     *
     * @var \Hifone\Models\Favorite
     */
    public $target;

    /**
     * Create a new favorite has reported event instance.
     */
    public function __construct($target)
    {
        $this->target = $target;
    }
}
