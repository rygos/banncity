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


namespace Hifone\Pipes;

use Closure;
use Illuminate\Support\Facades\DB;

class UseDatabaseTransactions
{
    /**
     * Handle the current command in the pipeline.
     *
     * @param mixed    $command
     * @param \Closure $next
     *
     * @return bool
     */
    public function handle($command, Closure $next)
    {
        return DB::transaction(function () use ($command, $next) {
            return $next($command);
        });
    }
}
