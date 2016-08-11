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


namespace Hifone\Install\Verify;

/**
 * Verifies if a certain condition is met. Verifiers are mainly used by the
 * installer to verify certain server conditions.
 */
interface Verifier
{
    public function getName();

    /**
     * Verify if a certain condition is met on this server.
     *
     * @return bool TRUE when condition is met, FALSE otherwise
     */
    public function verify();
}
