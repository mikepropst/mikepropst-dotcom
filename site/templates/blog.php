<?php

// how many blog posts per page
$perpage = 8;

?>

<?php snippet('header') ?>
<body class="blog">

  <?php snippet('topbar') ?>

  <div class="main main--blog">
    <div class="full-content full-content--blog">
        <h2 class="blog__title"><?php echo $page->title()->html() ?></h2>
        <div class="blog__bannertext"><?php echo $page->text()->kirbytext() ?></div>

        <?php $articles = $page->children()->visible()->flip()->paginate($perpage) ?>
        <?php foreach($articles as $article): ?>

        <?php switch ($article->posttype()) {
          case "link": ?>
        <article class="listing listing--link">
          <div class="listing__date"><?php echo $article->date('F j') ?></div>
          <h3 class="listing__title"><a href="<?php echo $article->postlink() ?>"><i class="fa fa-external-link"></i> <?php echo $article->title()->html() ?></a></h3>
          <div class="listing__content"><?php echo $article->text()->kirbytext() ?></div>
        </article>
        <?php break; ?>

        <?php case "short": ?>
          <article class="listing listing--short">
            <div class="listing__date"><?php echo $article->date('F j') ?></div>
            <h3 class="listing__title"><a href="<?php echo $article->url() ?>"><?php echo $article->title()->html() ?></a></h3>
            <div class="listing__content"><?php echo $article->text()->kirbytext() ?></div>
          </article>
        <?php break; ?>

        <?php default: ?>
          <article class="listing listing--std">
            <div class="listing__date"><?php echo $article->date('F j') ?></div>
            <h3 class="listing__title"><a href="<?php echo $article->url() ?>"><?php echo $article->title()->html() ?></a></h3>
            <div class="listing__content">
              <?php echo $article->summary()->kirbytext() ?>
              <a href="<?php echo $article->url() ?>">Read more &rsaquo;</a>
            </div>
          </article>
        <?php } ?>

        <?php endforeach ?>
    </div>
      <? // navigation ?>

  <?php if($articles->pagination()->hasPages()): ?>
    <nav class="nextprev nextprev--blog" role="navigation">
      <div class="nextprev__prev">
      <?php if($articles->pagination()->hasPrevPage()): ?>
      <a href="<?php echo $articles->pagination()->prevPageURL() ?>"> &larr; Newer posts</a>
      <?php endif ?>
      </div>
      <div class="nextprev__totop">
        <a href="<?php echo url('blog'); ?>">Blog home</a>
      </div>
      <div class="nextprev__next">
      <?php if($articles->pagination()->hasNextPage()): ?>
      <a href="<?php echo $articles->pagination()->nextPageURL() ?>">Older posts &rarr;</a>
      <?php endif ?>
      </div>
    </nav>
  <?php endif ?>
  </div>



<?php snippet('scripts') ?>
<?php snippet('footer') ?>
