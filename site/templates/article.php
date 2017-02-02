<?php snippet('header') ?>
<body class="blog">
  <?php snippet('topbar') ?>

  <div class="main main--blogpost">
    <div class="breadcrumb-nav breadcrumb-nav--blog">
      <div class="back-nav"><a href="<?php echo url('blog'); ?>">« Blog home</a></div>
    </div>
    <div class="content">
      <article class="post">
        <h2 class="post__title"><?php echo $page->title()->html() ?></h2>
        <div class="post__date"><?php echo $page->date('F j, Y') ?></div>
        <div class="post__tags">
          <?php foreach($page->tags()->split(',') as $tag): ?>
            <span class="post__tag"><?php echo $tag ?></span>
          <?php endforeach ?>
        </div>
        <div class="post__content">
          <?php echo $page->text()->kirbytext() ?>
          <?php if($page->postlink() != "") { echo '<a href="'. $page->postlink() . '">Visit Link</a>'; } ?>
        </div>
      </article>
    </div>

  </div>

<?php snippet('scripts') ?>
<?php snippet('footer') ?>
