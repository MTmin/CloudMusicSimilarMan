<?php
/**
 * Created by PhpStorm.
 * User: chien
 * Date: 18/6/18
 * Time: 16:40
 */

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Album extends Eloquent
{
    protected $table = 'album';
}
