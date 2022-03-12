<?php

namespace App\Utils\Life\Event;

class NaturalDeath extends \App\Utils\life\Event
{
    public function handle()
    {
        $user = $this->persons->random();
        if (!$user OR $user->is_dead) return;
        if ($user->age <= 50) return;
        if (0!=rand(0, 10)) return;

        $user->is_dead = true;
        $user->save();

        \App\Models\LifePersonsInteractions::create([
            'name' => 'Faleceu de causas naturais',
            'type' => $this->type,
            'person_from' => $user->id,
        ]);
    }
}