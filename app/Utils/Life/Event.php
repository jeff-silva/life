<?php

namespace App\Utils\Life;

class Event
{
    
    public $type = false;
    public $persons = [];

    public function __construct($persons=[])
    {
        $this->type = collect(explode('\\', get_called_class()))->last();
        $this->persons = $persons;
    }

    public function handle()
    {
        // 
    }
    
    static function all()
    {
        return collect(array_map(function($file) {
            $class = pathinfo($file, PATHINFO_FILENAME);
            return "\App\Utils\Life\Event\\{$class}";
        }, glob(__DIR__ .'/Event/*.php')));
    }

    
    static function traverse($persons)
    {
        $return = [];
        foreach(self::all() as $class) {
            $return[] = (new $class($persons))->handle();
        }
        return $return;
    }
}