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


namespace Hifone\Models;

use AltThree\Validator\ValidatingTrait;
use Hifone\Presenters\TipPresenter;
use Illuminate\Database\Eloquent\Model;
use McCool\LaravelAutoPresenter\HasPresenter;
use Venturecraft\Revisionable\RevisionableTrait;

class Tip extends Model implements HasPresenter
{
    use ValidatingTrait, RevisionableTrait;
    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = ['body', 'status'];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'body'   => 'string|required',
        'status' => 'int',
    ];

    /**
     * Get the presenter class.
     *
     * @return string
     */
    public function getPresenterClass()
    {
        return TipPresenter::class;
    }
}
