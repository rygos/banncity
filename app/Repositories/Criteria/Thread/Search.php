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

namespace Hifone\Repositories\Criteria\Thread;

use Hifone\Repositories\Contracts\RepositoryInterface as Repository;
use Hifone\Repositories\Criteria\Criteria;

class Search extends Criteria
{
    /**
     * @var int
     */
    protected $q;

    public function __construct($q)
    {
        $this->q = $q;
    }

    public function apply($model, Repository $repository)
    {
        return $model->search($this->q);
    }
}
