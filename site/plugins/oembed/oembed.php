<?php

namespace Kirby\Plugins\distantnative\oEmbed;

require_once('lib/autoload.php');

$kirby    = kirby();
$language = $kirby->site()->language();
$language = $language ? $language->code() : null;

// ================================================
//  Load components
// ================================================

Autoloader::load([
  'vendor'       => ['Embed/src/autoloader'],
  'core'         => ['core', 'url', 'html'],
  'lib'          => ['data', 'cache', 'thumb'],
  'translations' => ['en', $language],
  'providers'    => ['provider', true]
]);


// ================================================
//  Global helper
// ================================================

function oembed($url, $args = []) {
  return new Core($url, $args);
}


// ================================================
//  $page->video()->oembed()
// ================================================

$kirby->set('field::method', 'oembed', function($field, $args = []) {
  return oembed($field->value, $args);
});


// ================================================
//  (oembed: …)
// ================================================

$options = [
  'class'     => 'string',
  'thumb'     => 'string',
  'autoload'  => 'bool',
  'lazyvideo' => 'bool',
  'jsapi'     => 'bool',
];

$kirby->set('tag', 'oembed', [
  'attr' => array_keys($options),
  'html' => function($tag) use($options) {
    $args = [];

    foreach($options as $option => $mode) {
      if($mode === 'bool') {
        if($tag->attr($option) === 'true')  $args[$option] = true;
        if($tag->attr($option) === 'false') $args[$option] = false;
      } elseif ($mode === 'string') {
        $args['option'] = $tag->attr($option);
      }
    }

    return oembed($tag->attr('oembed'), $args);
  }
]);


// ================================================
//  Register panel field
// ================================================

$kirby->set('field', 'oembed', __DIR__ . DS . 'field');
$kirby->set('route', [
  'pattern' => 'api/plugin/oembed/preview',
  'action'  => function() {
    $oembed = oembed(get('url'), [
      'lazyvideo' => true
    ]);

    if($oembed->data === false) {
      return \response::json([
        'success' => 'false',
        'code'    => (string)$oembed,
      ]);
    } else {
      return \response::json([
        'success'      => 'true',
        'code'         => (string)$oembed,
        'title'        => Html::removeEmojis($oembed->title()),
        'authorName'   => $oembed->authorName(),
        'authorUrl'    => $oembed->authorUrl(),
        'providerName' => $oembed->providerName(),
        'providerUrl'  => $oembed->url(),
        'type'         => ucfirst($oembed->type())
      ]);
    }
  },
  'method'  => 'POST'
]);
