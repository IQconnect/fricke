<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$team = new FieldsBuilder('team');

$team
->addRepeater('team', ['label'=>"Zespół"])
            ->addGroup('content', ['label'=>""])
                ->addText('Title')
                ->addRepeater('persons')
                    ->addText('name', ['label'=>'Imię i nazwisko'])
                    ->addText('job', ['label'=>'Stanowisko'])
                    ->addText('numer', ['label'=>'Numer'])
                    ->addText('mail', ['label'=>'E-mail'])
                    ->addText('powiat', ['label'=>'Powiat'])
                    ->addLink('card', ['label'=>'Wizytówka'])
                ->endRepeater()
            ->endGroup()
        ->endRepeater();
return $team;
