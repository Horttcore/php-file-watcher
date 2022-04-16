<?php
namespace ralfhortt\fswatcher;

class Event
{
    public $type = null;
    public $file = null;

    public function __construct($type, $path)
    {
        if (!in_array($type, EventTypes::getTypes())) {
            throw new InvalidEventTypeException($type);
        }

        $this->type = $type;
        $this->file = $path;
    }

    public function isDeletion()
    {
        return $this->type === EventTypes::FILE_DELETED;
    }

    public function isAddition()
    {
        return $this->type === EventTypes::FILE_ADDED;
    }

    public function isModification()
    {
        return $this->type === EventTypes::FILE_CHANGED;
    }
}
