<div class="container">
  <div class="row">
    <?php foreach(page('projects')->children()->visible() as $proj): ?>

        <div class="project-thumb-complex">
          <h4><a href="<?php echo $proj->url() ?>"><?php echo html($proj->title()) ?></a></h4>
          <p><?php echo $proj->blurb() ?></p>
          <?php echo thumb($proj->images()->first(),array('width'=>600,'height'=>400,'crop'=>true)) ?>
        </div>

    <?php endforeach ?>
  </div>
</div>