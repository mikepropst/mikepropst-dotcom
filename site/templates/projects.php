<?php snippet('header') ?>
<body class="work">
	<?php snippet('topbar') ?>
	<div class="main">
		<div class="full-content">
			<article>
				<h2 class="work__title">Selected Work Projects</h2>
				<h3 class="work__subtitle">Including Case Studies</h3>
				<div class="projects-list">
			    <?php foreach(page('projects')->children()->visible() as $proj): ?>

		        	<div class="projthumb">
			          <a class="projthumb__image" href="<?php echo $proj->url() ?>"><?php echo thumb($proj->images()->first(),array('width'=>600,'height'=>400,'crop'=>true)) ?></a>
			          <h4 class="projthumb__title"><a href="<?php echo $proj->url() ?>"><?php echo html($proj->title()) ?></a></h4>
								<a class="projthumb__company" href="<?php echo $proj->url() ?>"><?php echo html($proj->company()->title()) ?></a>
			        </div>

			    <?php endforeach ?>
			    </div>
			</article>
		</div>
	</div>

<?php snippet('scripts') ?>
<?php snippet('footer') ?>
