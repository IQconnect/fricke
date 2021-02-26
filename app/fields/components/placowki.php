<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$placowki = new FieldsBuilder('placowki');

$placowki
->addtext('placowki_title', ['label'=>'Tytuł sekcji'])
->addtext('placowki_link_title', ['label'=>'Tytuł linku'])
->addlink('placowki_link')
->addRelationship('placowki', ['label'=>'Dodaj artykuły', 'post_type'=>'placowki',]);

return $placowki;
