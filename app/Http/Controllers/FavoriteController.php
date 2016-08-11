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

use Hifone\Commands\Favorite\AddFavoriteCommand;
use Hifone\Models\Thread;
use Illuminate\Support\Facades\Response;

class FavoriteController extends Controller
{
    public function createOrDelete(Thread $thread)
    {
        try {
            dispatch(new AddFavoriteCommand($thread));
        } catch (ValidationException $e) {
            //
        }

        return Response::json(['status' => 1]);
    }
}
