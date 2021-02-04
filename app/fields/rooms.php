<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$outposts = new FieldsBuilder('outposts');

$outposts
    ->setLocation('post_type', '==', 'placowki');

$outposts
    ->addFields(get_field_partial('partials.builder'));
return $outposts;
