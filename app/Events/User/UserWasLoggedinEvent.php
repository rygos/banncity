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


namespace Hifone\Events\User;

use Hifone\Models\User;

final class UserWasLoggedinEvent implements UserEventInterface
{
    /**
     * The user that has been logged in.
     *
     * @var \Hifone\Models\User
     */
    public $user;

    /**
     * Create a new user has reported event instance.
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }
}
