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

namespace Hifone\Events\Image;

final class ImageWasUploadedEvent implements ImageEventInterface
{
    public $file;

    public function __construct($file)
    {
        $this->file = $file;
    }
}
