<?php
class ClassName
{
    private static $instance;

    // __construct is private, so new obj can`t be created
    private function __construct()
    {
    }

    // getInstance is used to create/return the object
    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new ClassName();
        }
        return self::$instance;
    }

}