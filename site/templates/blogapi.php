<?php

header('Content-type: application/json; charset=utf-8');

$data = $pages->find('blog')->children()->visible()->flip()->paginate(300);
$json = array();

foreach($data as $article) {
  if($article->posttype()=="editorial") {

    $json[] = array(
      'url'   => (string)$article->url(),
      'title' => (string)$article->title(),
      'text'  => (string)$article->text()->kirbytext(),
      'summary'  => (string)$article->summary(),
      'date'  => (string)$article->date(),
      'posttype'  => (string)$article->posttype(),
      'postlink'  => (string)$article->postlink()
    );


  }
}

echo json_encode($json);
