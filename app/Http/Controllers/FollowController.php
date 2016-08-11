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


namespace Hifone\Http\Controllers;

use Auth;
use Hifone\Commands\Follow\AddFollowCommand;
use Hifone\Models\Thread;
use Hifone\Models\User;
use Illuminate\Support\Facades\Response;

class FollowController extends Controller
{
    public function createOrDelete(Thread $thread)
    {
        dispatch(new AddFollowCommand($thread));

        return Response::json(['status' => 1]);
    }

    public function createOrDeleteUser(User $user)
    {
        if ($user->id == Auth::user()->id) {
            return Response::json(['status' => -1]);
        }

        dispatch(new AddFollowCommand($user));

        return Response::json(['status' => 1]);
    }
}
