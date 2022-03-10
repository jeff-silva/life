<?php

namespace App\Utils\Life\Interaction;

class Pregnant extends \App\Utils\Life\Interaction
{
    public function handle()
    {
        if (!$this->person_from) return;
        if (!$this->person_to) return;
        
        $date = \App\Utils\Life::date();

        $sex = \App\Models\LifePersonsInteractions::query()
            ->where('type', 'Sex')
            ->withPersons($this->person_from, $this->person_to)
            ->first();

        if (!$sex) return;
        
        $expired = time() >= (strtotime($sex->created_at)+(60*60*12));
        if ($expired) return;

		if ($this->person_from->is_dead OR $this->person_to->is_dead) return;
        if ($this->person_from->gender=='male' AND $this->person_to->gender!='female') return false;
		if ($this->person_from->gender=='female' AND $this->person_to->gender!='male') return false;

        $user = json_decode((new \GuzzleHttp\Client)->request('GET', 'https://randomuser.me/api/?results=1')->getBody()->getContents(), true);
		$user = $user['results'][0];
        
        $baby = \App\Models\LifePersons::create([
            'name' => "{$user['name']['first']} {$user['name']['last']}",
            'gender' => $user['gender'],
            'photo' => $user['picture']['large'],
            'age' => 0,
            'birth' => $date->year,
            'father_id' => ($this->person_from->gender=='male'? $this->person_from->id: $this->person_to->id),
            'mother_id' => ($this->person_from->gender=='female'? $this->person_from->id: $this->person_to->id),
        ]);

        if (!$baby) return;

        $this->insert([
            'name' => 'Teve um bebê com',
        ]);

        $this->insert([
            'name' => 'Nasceu',
            'type' => 'Born',
            'person_from' => $baby->id,
            'person_to' => null,
        ]);
    }
}