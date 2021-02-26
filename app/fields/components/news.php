<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$news = new FieldsBuilder('news');

$news
->addtext('news_title', ['label'=>'Tytuł sekcji'])
->addtext('news_link_title', ['label'=>'Tytuł linku'])
->addlink('news_link')
->addRelationship('news', ['label'=>'Dodaj artykuły', 'post_type'=>'post' , 'min' => '3','max' => '9',]);

return $news;
