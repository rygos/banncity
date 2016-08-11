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

namespace Hifone\Test\Commands;

use Collective\Bus\Dispatcher;
use Hifone\Test\AbstractAnemicTestCase;

/**
 * This is the abstract command test case class.
 */
abstract class AbstractCommandTestCase extends AbstractAnemicTestCase
{
    public function testHandlerCanBeResolved()
    {
        $command = $this->getObjectAndParams()['object'];
        $dispatcher = $this->app->make(Dispatcher::class);
        $this->assertInstanceOf($this->getHandlerClass(), $dispatcher->resolveHandler($command));
    }
}
