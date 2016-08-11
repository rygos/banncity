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


namespace Hifone\Commands\Pm;

final class AddPmCommand
{
    public $body;

    public $user_id;

    public $node_id;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'user_id'   => 'required|int',
        'author_id' => 'required|int',
        'body'      => 'required|string',
    ];

    /**
     * Create a new add pm command instance.
     *
     * @param string $body
     */
    public function __construct($user_id, $author_id, $body)
    {
        $this->user_id = $user_id;
        $this->author_id = $author_id;
        $this->body = $body;
    }
}
