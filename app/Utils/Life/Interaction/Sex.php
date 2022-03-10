<?php

namespace App\Utils\Life\Interaction;

class Sex extends \App\Utils\Life\Interaction
{
    public function handle()
    {
        if (!$this->person_from) return;
        if (!$this->person_to) return;

        $romantics = \App\Models\LifePersonsInteractions::query()
            ->where('type', 'Romantic')
            ->withPersons($this->person_from, $this->person_to)
            ->count();

        if ($romantics==0) return;

        $save = $this->insert([
            'name' => 'Teve um momento quente com',
        ]);

        return $save;
    }
}