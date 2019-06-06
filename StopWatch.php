<?php


class StopWatch
{
    public $startTime, $endTime;

    function __construct()
    {
        $this->startTime = date('H:i:s');
    }

    function getterStartTime()
    {
        return $this->startTime;
    }

    function getterEndTime()
    {
        return $this->endTime;
    }

    function start()
    {
        $this->startTime = -microtime(true);
        return $this->startTime;
    }

    function end()
    {
        $this->endTime = microtime(true);
        return $this->endTime;
    }

    function getElapsedTime()
    {
        $time = $this->startTime + $this->endTime;
        return $time;
    }

}