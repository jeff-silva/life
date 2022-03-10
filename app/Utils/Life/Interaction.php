<?php

namespace App\Utils\Life;

class Interaction {

    public $type;
    public $person_from;
    public $person_to;

    public function __construct($person_from=false, $person_to=false)
    {
        $this->type = collect(explode('\\', get_called_class()))->last();
        if ($person_from->id==$person_to->id) return;
        $this->person_from = $person_from;
        $this->person_to = $person_to;
    }
    
    public function handle()
    {
        // 
    }

    public function insert($data=[])
    {
        if ($this->person_from AND $this->person_to AND $this->person_from->id == $this->person_to->id) {
            return new \App\Models\LifePersonsInteractions;
        }

        return \App\Models\LifePersonsInteractions::create(array_merge([
            'type' => $this->type,
            'person_from' => ($this->person_from? $this->person_from->id: null),
            'person_to' => ($this->person_to? $this->person_to->id: null),
        ], $data));
    }

}