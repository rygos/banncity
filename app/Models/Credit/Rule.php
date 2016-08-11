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

namespace Hifone\Models\Credit;

use AltThree\Validator\ValidatingTrait;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use ValidatingTrait;

    const NO_LIMIT = 0;

    const DAILY = 1;

    const ONCE = 2;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'credit_rules';

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = ['name', 'slug', 'reward', 'frequency'];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'name'      => 'required|string',
        'slug'      => 'required|string',
        'reward'    => 'required|int',
    ];
}
