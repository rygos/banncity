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

namespace Hifone\Providers;

use Hifone\Services\Parsers\Markdown;
use Hifone\Services\Parsers\ParseAt;
use Illuminate\Support\ServiceProvider;

class ParserServiceProvider extends ServiceProvider
{
    /**
     * Indicats if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Boot the parser provider.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the parser services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('parser.markdown', function ($app) {
            return new Markdown();
        });

        $this->app->singleton('parser.at', function ($app) {
            return new ParseAt();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'parser.markdown',
            'parser.at',
        ];
    }
}
