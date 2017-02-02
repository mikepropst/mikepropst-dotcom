<?php snippet('header') ?>
  
    <?php 
  /* snippet('menu') */
  ?>


  <div class="main container" role="main">
    <div class="row">
      <div class="col-sm-12">
        <h1><?php echo $page->title()->html() ?></h1>

        <p class="roles">
          <strong>Roles: </strong><?php echo $page->roles() ?>
        </p>

        <div class="text">
          <?php echo $page->text()->kirbytext() ?>
        </div>

      </div>
    </div>
    
    <div class="row">
      <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
        <div class="mobile-project-image">
          <h3><?php echo $image->title(); ?></h3>
          <?php if ($image->caption() != ""): ?>
            <p class="caption"><?php echo html($image->caption()); ?></p>
          <?php endif ?>
          <a class="thumblink" href="<?php echo $image->url(); ?>"><?php echo thumb($image,array('width'=>400,'height'=>300,'crop'=>true)); ?></a>
        </div>
      <?php endforeach ?>
    </div>

    <nav class="row nextprev cf" role="navigation">
        <div class="prev">
          <?php if($prev = $page->prevVisible()): ?>
          <a href="<?php echo $prev->url() ?>">&larr; Previous Project</a>
          <?php endif ?>
        </div>
        <div class="totop">
          <a href="<?php echo $page->parent()->url(); ?>">Back to <?php echo $page->parent()->title(); ?></a>
        </div>
        <div class="next">
          <?php if($next = $page->nextVisible()): ?>
          <a href="<?php echo $next->url() ?>">Next Project &rarr;</a>
          <?php endif ?>
        </div>
    </nav>

  </div>


<?php snippet('scripts-mobile') ?>
<?php snippet('footer') ?>