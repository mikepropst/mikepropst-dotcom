<?php snippet('header') ?>
<body class="about">
  <?php snippet('topbar') ?>

  <div class="main main--about">
    <div class="full-content">
      <article class="aboutpage">
        <h2 class="aboutpage__title"><?php echo $page->title()->html() ?></h2>
        <div class="aboutpage__content">
          <?php echo $page->text()->kirbytext() ?>
          <?php if($page->postlink() != "") { echo '<a href="'. $page->postlink() . '">Visit Link</a>'; } ?>
        </div>
      </article>
    </div>
  </div>

<?php snippet('scripts') ?>
<?php snippet('footer') ?>
