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

namespace Hifone\Install\Verify;

class PhpExtensionVerifier extends AbstractVerifier
{
    public function __construct($extension)
    {
        $this->extension = $extension;
    }

    public function getName()
    {
        return "PHP Extension: '".$this->extension."'";
    }

    /**
     * Verifies is a certain PHP extension is loaded.
     *
     * @return bool TRUE when the extension is loaded, FALSE otherwise
     */
    public function verify()
    {
        return extension_loaded($this->extension);
    }
}
