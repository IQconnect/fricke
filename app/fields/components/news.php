<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$news = new FieldsBuilder('news');

$news
->addRelationship('news', ['label'=>'Dodaj artykuły', 'post_type'=>'post' , 'min' => '3','max' => '3',]);

return $news;
