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


namespace Hifone\Models;

use Cache;
use DB;
use Venturecraft\Revisionable\RevisionableTrait;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    use RevisionableTrait;

    public static function relationArrayWithCache()
    {
        return Cache::remember('all_assigned_roles', $minutes = 60, function () {
            return DB::table('role_user')->get();
        });
    }

    public static function rolesArrayWithCache()
    {
        return Cache::remember('all_roles', $minutes = 60, function () {
            return DB::table('roles')->get();
        });
    }
}
