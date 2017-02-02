<?php snippet('header') ?>

<body class="work">
  <?php snippet('topbar') ?>
  <div class="main main--project">
    <div class="breadcrumb-nav breadcrumb-nav--work">
      <div class="back-nav"><a href="<?php echo url('projects'); ?>">« Projects</a></div>
    </div>
    <div class="content">
      <article class="project">
        <div class="project__company">
          <?php
            if($page->companyimg() != "") {
              echo '<img src="/assets/images/companies/'.$page->companyimg().'">';
            }
            else {
              echo $page->company()->title();
            }
          ?>
        </div>
        <div class="project__header">
          <h2 class="project__title work__title"><?php echo $page->title()->html() ?></h2>
          <?php if ($page->blurb() != ""): ?>
            <h3 class="project__blurb work__subtitle"><?php echo $page->blurb(); ?></h3>
          <?php endif ?>
        </div>

        <div class="project__meta">
          <table>
            <tr>
              <th scope="row">Roles</th>
              <td>
                <?php foreach($page->roles()->split(',') as $role): ?>
                  <span class="role"><?php echo $role ?></span>
                <?php endforeach ?>
              </td>
            </tr>
            <tr>
              <th scope="row">Tools</th>
              <td>
                <?php foreach($page->tools()->split(',') as $tool): ?>
                  <span class="tool"><?php echo $tool ?></span>
                <?php endforeach ?>
              </td>
            </tr>
          </table>
        </div>

        <div class="project__content">
          <?php echo $page->text()->kirbytext() ?>
        </div>

        <? // images ?>
        <?php if ($page->images() != ""): ?>

          <div class="project__imagesheader">
            <h3>Selected Images</h3>
          </div>

          <div class="project__images-block">
            <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
              <?php if ($image->includeingallery() == '1'): ?>
                <div class="project__image-row">
                  <div class="project__image">
                      <?php if($image->linkurl() != ""): ?>
                        <div class="imgcontainer"><a class="imgpopuplink" href="<?php echo $image->linkurl(); ?>"><?php echo thumb($image, array('width' => 500, 'height' => 500, 'crop' => true)); ?></a></div>
                      <?php else: ?>
                        <div class="imgcontainer"><img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>"></div>
                      <?php endif ?>
                      <div class="project__imagetext">
                        <h4><?php echo $image->title(); ?></h4>
                        <?php if ($image->caption() != ""): ?>
                          <div class="caption"><?php echo html($image->caption()->kirbytext()); ?></div>
                        <?php endif ?>
                      </div>
                  </div>
                </div>
              <?php endif ?>
            <?php endforeach ?>
          </div>

        <?php endif ?>
      </article>

      <nav class="nextprev" role="navigation">
        <div class="nextprev__prev">
          <?php if($prev = $page->prevVisible()): ?>
          <a href="<?php echo $prev->url() ?>">&larr; Previous project</a>
          <?php endif ?>&nbsp;
        </div>
        <div class="nextprev__totop">
          <a href="<?php echo url('projects'); ?>">All projects</a>
        </div>
        <div class="nextprev__next">
          <?php if($next = $page->nextVisible()): ?>
          <a href="<?php echo $next->url() ?>">Next project &rarr;</a>
          <?php endif ?>&nbsp;
        </div>
    </nav>
    </div>


  </div>

<?php snippet('scripts') ?>
<?php snippet('footer') ?>
