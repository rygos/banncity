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

namespace Hifone\Test\Providers;

use GitaminHQ\BenchTest\LaravelTrait;
use GitaminHQ\BenchTest\ServiceProviderTrait;
use Hifone\Providers\AppServiceProvider;
use Hifone\Test\AbstractTestCase;

class AppServiceProviderTest extends AbstractTestCase
{
    use LaravelTrait, ServiceProviderTrait;

    protected function getServiceProviderClass($app)
    {
        return AppServiceProvider::class;
    }
}
