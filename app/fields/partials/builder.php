<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$builder = new FieldsBuilder('builder');

$builder
    ->addTab('builder', ['placement' => 'left'])
        ->addFlexibleContent('components', ['button_label' => 'Add Component'])
            ->addLayout(get_field_partial('components.hero'))
            ->addLayout(get_field_partial('components.small-hero'))
            ->addLayout(get_field_partial('components.team'))
            ->addLayout(get_field_partial('components.cmap'))
            ->addLayout(get_field_partial('components.tabs'))
            ->addLayout(get_field_partial('components.video'))
            ->addLayout(get_field_partial('components.flex'))
            ->addLayout(get_field_partial('components.news'))
            ->addLayout(get_field_partial('components.product'))
            ->addLayout(get_field_partial('components.placowki'))
            ->addLayout(get_field_partial('components.gallery'))
            ->addLayout(get_field_partial('components.files'))
            ->addLayout('content')
            ->addLayout('contact')
    ;
return $builder;
