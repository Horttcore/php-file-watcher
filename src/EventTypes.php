<?php
namespace ralfhortt\fswatcher;

class EventTypes
{
    const FILE_ADDED = 'FILE_ADDED';
    const FILE_CHANGED = 'FILE_CHANGED';
    const FILE_DELETED = 'FILE_DELETED';

    public static function getTypes()
    {
        $reflection = new \ReflectionClass(self::class);
        return $reflection->getConstants();
    }
}
