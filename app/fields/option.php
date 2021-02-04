<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$option_page = new FieldsBuilder('option');

$option_page
    ->setLocation('options_page', '==', 'acf-options-ustawienia-strony');

$option_page
    ->addTab('Main', ['label' => 'Ustawienia główne', 'placement' => 'left'])
        ->addImage('logo', ['wrapper'=>['width'=>'33%']])
        ->addImage('header_img', ['wrapper'=>['width'=>'33%']])
    ->addTab('Kontakt', ['placement' => 'left'])
        ->addWysiwyg('contact-header', ['label' => 'Contact w nagłówku', 'media_upload' => 0])
        ->addWysiwyg('contact-contact', ['label' => 'Contact w kontakcie', 'media_upload' => 0])
        ->addRepeater('team', ['label'=>"Zespół"])
            ->addGroup('content', ['label'=>""])
                ->addText('Title')
                ->addRepeater('persons')
                    ->addText('name', ['label'=>'Imię i nazwisko'])
                    ->addText('job', ['label'=>'Stanowisko'])
                    ->addText('numer', ['label'=>'Numer'])
                    ->addText('mail', ['label'=>'E-mail'])
                    ->addLink('card', ['label'=>'Wizytówka'])
                ->endRepeater()
            ->endGroup()
        ->endRepeater()
    ->addTab('Mapa', ['placement' => 'left'])
        ->addRepeater('pins')
            ->addImage('icon', ['label'=>'icon'])
            ->addGoogleMap('pin')
            ->addWysiwyg('tooltip', ['media_upload' => 0])
        ->endRepeater()
    ->addTab('Stopka', ['placement' => 'left'])
        ->addText('contact-placet', ['label'=>'Tytuł'])
        ->addWysiwyg('contact-place', ['label' => 'Pierwsza kolumna', 'media_upload' => 0, 'wrapper'=>['width'=>'50%'], 'rows'=>2])
        ->addText('contact-odzialt', ['label'=>'Tytuł'])
        ->addWysiwyg('contact-odzial', ['label' => 'Druga kolumna', 'media_upload' => 0, 'wrapper'=>['width'=>'50%'], 'rows'=>2])
        ->addText('contact-prodt', ['label'=>'Tytuł'])
        ->addText('copyright')
        ->addImage('iqlogo', ['label' => 'Wykonanie'])
    ->addTab('Produkty', ['placement' => 'left'])
        ->addGroup('produkty')
            ->addFields(get_field_partial('components.small-hero'))
        ->endGroup()
    ->addTab('Realizacje', ['placement' => 'left'])
        ->addGroup('realizacje')
            ->addFields(get_field_partial('components.small-hero'))
        ->endGroup();
    ;

return $option_page;
