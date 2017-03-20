<?php snippet('header') ?>
<body class="work">
	<?php snippet('topbar') ?>
	<div class="main">
		<div class="full-content">
			<article>
				<h2 class="work__title">Audio Project Portfolio</h2>
				<h3 class="work__subtitle"><?php echo $page->text()->html() ?></h3>
				<div class="projects-list">

			    <?php foreach(page('audio-projects')->children()->visible() as $proj): ?>

		        	<div class="audio-project">

								<h4><?php echo html($proj->artist()) ?>: <span style="font-weight: normal"><?php echo html($proj->projectTitle()) ?></span></h4>

								<?php if ($proj->images() !=""): ?>
									<div class="audio-project__image"><?php echo thumb($proj->images()->first(),array('width'=>200,'height'=>200,'crop'=>true)) ?></div>
								<?php endif ?>

								<div class="audio-project__info">

									<ul class="audio-project__tags">
									  <?php foreach($proj->role()->split() as $role): ?>
									  <li><?php echo $role ?></li>
									  <?php endforeach ?>
									</ul>
									<p>
										<?php echo html($proj->description()) ?>
									</p>
									<div class="audio-project__listen">
										<?php if ($proj->link2() !=""): ?>
											Listen <a href="<?php echo html($proj->link()) ?>">here (<?php echo html($proj->linktype()) ?>)</a> or <a href="<?php echo html($proj->link2()) ?>">here (<?php echo html($proj->linktype2()) ?>)</a>
										<?else: ?>
											<a href="<?php echo html($proj->link()) ?>">Listen at <?php echo html($proj->linktype()) ?></a>
										<?php endif ?>
									</div>
								</div>
			        </div>

			    <?php endforeach ?>
			    </div>
			</article>
		</div>
	</div>

<?php snippet('scripts') ?>
<?php snippet('footer') ?>
