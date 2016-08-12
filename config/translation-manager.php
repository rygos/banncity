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

return [

    /*
    |--------------------------------------------------------------------------
    | Routes group config
    |--------------------------------------------------------------------------
    |
    | The default group settings for the elFinder routes.
    |
    */
    'route' => [
        'prefix' => 'translations',
        'middleware' => [
            //'auth',
            'web',
        ],
    ],

    /*
     * Enable deletion of translations
     *
     * @type boolean
     */
    'delete_enabled' => true,

    /*
     * Exclude specific groups from Laravel Translation Manager.
     * This is useful if, for example, you want to avoid editing the official Laravel language files.
     *
     * @type array
     *
     * 	array(
     *		'pagination',
     *		'reminders',
     *		'validation',
     *	)
     */
    'exclude_groups' => [],

];
