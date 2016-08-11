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

namespace Hifone\Handlers\Listeners\Photo;

use Auth;
use Hifone\Events\EventInterface;
use Hifone\Models\Photo;

class AddPhotoRecordHandler
{
    public function handle(EventInterface $event)
    {
        Photo::create([
            'user_id' => Auth::user()->id,
            'image'   => $event->file['filename'],
        ]);
    }
}
