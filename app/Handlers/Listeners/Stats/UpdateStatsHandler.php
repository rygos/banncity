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

namespace Hifone\Handlers\Listeners\Stats;

use Cache;
use Hifone\Events\EventInterface;
use Hifone\Events\Image\ImageWasUploadedEvent;
use Hifone\Events\Reply\ReplyWasAddedEvent;
use Hifone\Events\Thread\ThreadWasAddedEvent;
use Hifone\Events\User\UserWasAddedEvent;
use Hifone\Models\Stats;

class UpdateStatsHandler
{
    public function handle(EventInterface $event)
    {
        $key = 'stats';
        if ($event instanceof ReplyWasAddedEvent) {
            Stats::newReply();
        } elseif ($event instanceof ThreadWasAddedEvent) {
            Stats::newThread();
        } elseif ($event instanceof UserWasAddedEvent) {
            Stats::newUser();
        } elseif ($event instanceof ImageWasUploadedEvent) {
            Stats::newImage();
        }

        Cache::forget($key);
    }
}
