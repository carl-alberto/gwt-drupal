<?php
/**
 * @file
 * Returns the HTML for the footer region.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728140
 */
?>
<?php if ($content): ?>
  <div id="auxiliary" class="<?php print $classes; ?>">
  	<div class="row">
    	<?php print $content; ?>
    </div>
  </div>
<?php endif; ?>
