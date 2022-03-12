<?php

namespace App\Utils\Life\Event;

class Grow extends \App\Utils\life\Event
{
    public function handle()
    {
        $date = \App\Utils\Life::date();
        
        foreach($this->persons as $person) {
            if ($person->is_dead) continue;
            $person->age = $date->year - $person->birth;
            $person->save();
        }
    }
}