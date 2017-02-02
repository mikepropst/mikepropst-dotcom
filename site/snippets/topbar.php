<header class="header">
	<div class="header__inner">
		<div class="header__title">
			<h1>Mike Propst <span>UX Designer</span></h1>
		</div>
		<div class="header__nav">
			<ul>
				<li><a href="/projects/" class="header__link--work <?php ecco($page->parent()->title() == "Projects" || $page->title()=="Projects", ' current') ?>">Work</a></li>
				<li><a href="/blog/" class="header__link--blog <?php ecco($page->parent()->title() == "Mike's Blog" || $page->title()=="Mike's Blog", ' current') ?>">Blog</a></li>
				<li><a href="/about/" class="header__link--about <?php ecco($page->title() == "About", ' current') ?>">About</a></li>
			</ul>
		</div>
	</div>
</header>
