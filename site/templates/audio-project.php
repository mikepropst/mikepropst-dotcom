<?php snippet('header') ?>

<body class="work">
  <?php snippet('topbar') ?>
  <div class="breadcrumb-nav">
    <div class="back-nav"><a href="<?php echo url('projects'); ?>">« Projects</a></div>
  </div>
  <div class="main">
    <div class="content">
        <?php echo $page->title()->html() ?>
    </div>

  </div>

<?php snippet('scripts') ?>
<?php snippet('footer') ?>
