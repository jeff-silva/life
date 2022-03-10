<?php

namespace App\Utils\Life\Interaction;

class Romantic extends \App\Utils\Life\Interaction
{
    public function handle()
    {
        if (!$this->person_from) return;
        if (!$this->person_to) return;
        
        $count = \App\Models\LifePersonsInteractions::query()
            ->withPersons($this->person_from, $this->person_to)
            ->where('type', $this->type)
            ->count();
        
        if (0==$count AND 0!=rand(0, 5)) {
            return;
        }

        return $this->insert([
            'name' => 'Teve um momento romântico com',
        ]);
    }
}