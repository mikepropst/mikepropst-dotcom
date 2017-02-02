<!DOCTYPE html>
<html lang="en"  <?php if($page->isHomePage()): ?> class="home" <?php endif ?>>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700|Montserrat:400,700" rel="stylesheet">

  <?php echo css('assets/css/main.css') ?>
  <?php echo css('assets/css/main.css?v='.time()) ?>

  <?php echo css('assets/plugins/oembed/css/oembed.css') ?>

  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="alternate" type="application/rss+xml" href="<?php echo url('blog/feed') ?>" title="Blog Feed">
</head>
