<?php
namespace ralfhortt\fswatcher;

use Throwable;

class InvalidEventTypeException extends \Exception
{
    public function __construct($eventType, $code = 0, Throwable $previous = null)
    {
        parent::__construct("The following event type \"$eventType\" is not supported", $code, $previous);
    }
}
