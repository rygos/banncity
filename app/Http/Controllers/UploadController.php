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

namespace Hifone\Http\Controllers;

use Hifone\Commands\Image\UploadImageCommand;
use Input;

class UploadController extends Controller
{
    public function uploadImage()
    {
        if ($file = Input::file('file')) {
            $data = dispatch(new UploadImageCommand($file));
        } else {
            $data['error'] = trans('hifone.photos.upload_error');
        }

        return $data;
    }
}
