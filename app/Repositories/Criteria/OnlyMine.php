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


namespace Hifone\Repositories\Criteria;

use Hifone\Repositories\Contracts\RepositoryInterface as Repository;

class OnlyMine extends Criteria
{
    /**
     * @var int
     */
    protected $userId;

    public function __construct($userId)
    {
        $this->userId = $userId;
    }

    public function apply($model, Repository $repository)
    {
        return $model->forUser($this->userId);
    }
}
