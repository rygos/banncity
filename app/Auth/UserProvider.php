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


namespace Hifone\Auth;

use Hifone\Models\User;
use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Contracts\Auth\Authenticatable;

class UserProvider extends EloquentUserProvider
{
    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        if ($user instanceof User) {
            $plain = $credentials['password'];

            return $this->hasher->check($plain, $user->getAuthPassword(), [
                'salt' => $user->salt,
            ]);
        }

        return parent::validateCredentials($user, $credentials);
    }
}
