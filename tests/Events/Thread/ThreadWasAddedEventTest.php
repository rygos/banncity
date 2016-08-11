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

namespace Hifone\Test\Events\Thread;

use Hifone\Events\Thread\ThreadWasAddedEvent;
use Hifone\Models\Thread;

class ThreadWasAddedEventTest extends AbstractThreadEventTestCase
{
    protected function objectHasHandlers()
    {
        return true;
    }

    protected function getObjectAndParams()
    {
        $params = ['thread' => new Thread()];
        $object = new ThreadWasAddedEvent($params['thread']);

        return compact('params', 'object');
    }
}
