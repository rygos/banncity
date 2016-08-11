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

class Filter extends Criteria
{
    /**
     * @var int
     */
    protected $filter;

    public function __construct($filter)
    {
        $this->filter = $filter;
    }

    public function apply($model, Repository $repository)
    {
        switch ($this->filter) {
            case 'unanswered':
                return $model->where('reply_count', 0)->recent();
                break;
            case 'like':
                return $model->orderBy('like_count', 'desc')->recent();
                break;
            case 'excellent':
                return $model->where('is_excellent', true)->recent();
                break;
            case 'recent':
                return $model->recent();
                break;
            case 'node':
                return $model->recentReply();
                break;
            default:
                return $model->pinAndRecentReply();
                break;
        }
    }
}
