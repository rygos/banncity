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


namespace Hifone\Services\Breadcrumb;

class Breadcrumb implements \Countable
{
    private $breadcrumbs = [];

    /**
     * Count.
     *
     * @return int
     */
    public function count()
    {
        return count($this->breadcrumbs);
    }

    /**
     *  Push.
     *
     * @param $name
     * @param null $url
     */
    public function push($name, $url = null)
    {
        if (is_array($name)) {
            foreach ($name as $key => $value) {
                $this->push($key, $value);
            }
        } else {
            $this->breadcrumbs[] = ['name' => $name, 'url' => $url];
        }
    }

    /**
     * Render.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render()
    {
        return view('components/breadcrumb', ['breadcrumbs' => $this->breadcrumbs]);
    }
}
