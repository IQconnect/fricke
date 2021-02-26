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
        ->addText('fb', ['label'=>'Facebook'])
        ->addText('yt', ['label'=>'Youtube'])
    ->addTab('Kontakt', ['placement' => 'left'])
        ->addWysiwyg('contact-header', ['label' => 'Contact nagłówek', 'media_upload' => 0])
        ->addWysiwyg('contact-contact', ['label' => 'Informacje do kontaktu', 'media_upload' => 0])
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
    ->addTab('Placowki', ['label'=>'Placówki', 'placement' => 'left'])
        ->addGroup('placowki')
            ->addFields(get_field_partial('components.small-hero'))
        ->endGroup();

    ;

return $option_page;
