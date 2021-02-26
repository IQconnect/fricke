<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$page = new FieldsBuilder('page');

$page
    ->setLocation('post_type', '==', 'page')
        ->or('post_type', '==', 'post');

$page
    ->addFields(get_field_partial('partials.builder'));
return $page;
