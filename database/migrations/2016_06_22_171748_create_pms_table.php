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


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('root_id', 10);
            $table->integer('user_id');
            $table->integer('author_id');
            $table->tinyInteger('folder');
            $table->integer('meta_id');
            $table->timestamps();

            $table->index('user_id');
            $table->index('root_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pms');
    }
}
