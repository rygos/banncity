<?php

/*
 * This file is part of Hifone.
 *
 * (c) until 2016-08-11 Hifone.com <hifone@hifone.com>
 * (c) changes made after 2016-08-11 banncity.de <broxxer@broxxer.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace Hifone\Commands\Favorite;

final class AddFavoriteCommand
{
    public $target;

    /**
     * Create a new add favorite command instance.
     *
     * @param string $type
     */
    public function __construct($target)
    {
        $this->target = $target;
    }
}
