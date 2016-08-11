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


namespace Hifone\Http\Controllers\Api;

class GeneralController extends AbstractApiController
{
    /**
     * Ping endpoint allows API consumers to check the version.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function ping()
    {
        return $this->item('Pong!');
    }
}
