<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$video = new FieldsBuilder('video', ['label' => 'Video']);

$video
->addtext('video_title', ['label'=>'Tytuł sekcji'])
->addRepeater('videos')
    ->addImage('image', ['label' => 'Tło'])
    ->addLink('link', ['label' => 'Link'])
    ->addText('video_name', ['label'=>'Tytuł video']);

return $video;
