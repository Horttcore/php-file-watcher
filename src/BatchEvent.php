<?php
namespace ralfhortt\fswatcher;

class BatchEvent
{
    /**
     * @var Event[]
     */
    public $eventFiles = [];

    public function __construct($eventFiles)
    {
        $this->eventFiles = $eventFiles;
    }
}
