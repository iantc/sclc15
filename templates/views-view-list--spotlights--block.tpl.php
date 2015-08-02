<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * @ingroup views_templates
 */
?>
<div id="slider1_container" class="container-fluid jumbotron">
  <!-- Slides Container -->
  <div class="container">
	  <div id="spotlight-carousel" class="owl-carousel owl-theme">
	    <?php foreach ($rows as $id => $row): ?>
	      <div class="item"><?php print $row; ?></div>
	    <?php endforeach; ?>
	  </div>
  </div>
</div>