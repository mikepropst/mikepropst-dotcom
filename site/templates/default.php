<?php snippet('header') ?>

<?php 
/* snippet('menu') */
?>

<div class="container main">
	<div class="row">
		<div class="col-sm-12 text">
			<h1><?php echo $page->title()->html() ?></h1>
			<?php echo $page->text()->kirbytext() ?>
		</div>
	</div>
</div>
<?php snippet('scripts') ?>
<?php snippet('footer') ?>