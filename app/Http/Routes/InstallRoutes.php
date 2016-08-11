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

namespace Hifone\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

/**
 * TThis is the install routes class.
 */
class InstallRoutes
{
    /**
     * Define the install routes.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $router
     *
     * @return void
     */
    public function map(Registrar $router)
    {
        $router->group(['middleware' => ['web', 'not_installed']], function (Registrar $router) {
            $router->get('install', 'InstallController@index');
            $router->post('install/step0', 'InstallController@postStep0');
            $router->post('install/step1', 'InstallController@postStep1');
            $router->post('install/step2', 'InstallController@postStep2');
            $router->post('install/step3', 'InstallController@postStep3');
        });
    }
}
