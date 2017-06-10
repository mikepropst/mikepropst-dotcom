<?php snippet('header') ?>


<body>
  <?php snippet('topbar') ?>
  <div class="main main--resume">
    <div class="content">
      <article class="resume">
        <h1 class="resume__header">
          <div class="resume__download">
            <a href="/assets/mpropst_resume_06-2017.pdf"><i class="fa fa-file-pdf-o"></i> Download PDF</a>
          </div>
          <?php echo $page->title()->html() ?>
        </h1>
        <div class="resume__content">
          <?php echo $page->text()->kirbytext() ?>
        </div>
      </article>
    </div>
  </div>

<?php snippet('scripts') ?>
<?php snippet('footer') ?>

</body>
