<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$cmap = new FieldsBuilder('cmap');

$cmap
    ->addText('contact_title', ['label'=>'Tytuł do kontaktu'])
    ->addWysiwyg('contact_text', ['label'=>'Dane kontaktowe'])
    ->addText('contact_code', ['label'=>'Kod mapy']);
return $cmap;
