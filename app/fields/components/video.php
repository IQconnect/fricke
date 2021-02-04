<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$video = new FieldsBuilder('video', ['label' => 'Video']);

$video
->addRepeater('videos')
    ->addImage('image', ['label' => 'Tło'])
    ->addLink('link', ['label' => 'Link']);

return $video;
