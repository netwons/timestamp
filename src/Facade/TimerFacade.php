<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 6/4/18
 * Time: 10:20 PM
 */

namespace Masoud\Time\Facade;


use Illuminate\Support\Facades\Facade;

class TimerFacade extends Facade

{
    protected static function getFacadeAccessor()
    {
        return 'MyTimer';
    }

}