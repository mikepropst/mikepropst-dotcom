<?php

// nested menu
$items = $pages->visible();

// only show the menu if items are available
if($items->count()):

?>
<nav>
  <ul>
    <?php foreach($items as $item): ?>
    <li>
      <a<?php e($item->isOpen(), ' class="active"') ?> href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a>

      <?php

      // get all children for the current menu item
      $children = $item->children()->visible();

      // display the submenu if children are available
      if($children->count() > 0):

      ?>
      <ul>
        <?php foreach($children as $child): ?>
        <li><h3><a<?php e($child->isOpen(), ' class="active"') ?> href="<?php echo $child->url() ?>"><?php echo html($child->title()) ?></a></h3></li>
	      <?php
		    $grandchildren = $child->children()->visible();
	        if($grandchildren->count() > 0):
	      ?>
			<ul>
				<?php foreach($grandchildren as $grandchild): ?>
					<li><a<?php e($grandchild->isOpen(), ' class="active"') ?> href="<?php echo $grandchild->url() ?>"><?php echo html($grandchild->title()) ?></a></li>
				<?php endforeach ?>
			</ul>
  		  <?php endif ?>
        <?php endforeach ?>
      </ul>
      <?php endif ?>

    </li>
    <?php endforeach ?>
  </ul>
</nav>
<?php endif ?>