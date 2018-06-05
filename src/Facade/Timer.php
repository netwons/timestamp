<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 6/4/18
 * Time: 9:57 PM
 */

namespace Masoud\Time\Facade;


use Carbon\Carbon;

class Timer
{
    public $time;
    public function __construct()
    {
        $this->time=Carbon::now()->setTimezone('asia/tehran');
    }
    public function onehourago()
    {
        return $this->time->subHour(1)->toTimeString();
        
    }

    public function aMinuteago()
    {
        return $this->time->subMinute(1)->toTimeString();
    }

    public function aQuarterago()
    {
        return $this->time->subMinute(15)->toTimeString();
    }
}