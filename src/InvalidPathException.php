<?php
namespace ralfhortt\fswatcher;

use Throwable;

class InvalidPathException extends \Exception
{
    public function __construct($path, $code = 0, Throwable $previous = null)
    {
        parent::__construct("The following path \"$path\" does not exist", $code, $previous);
    }
}
