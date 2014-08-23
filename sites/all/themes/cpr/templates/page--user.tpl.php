<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<div id="page">

  <div class="main-content">
    <div id="main-content-inner" class="main-content-inner">
      <div id="content-middle-column" class="content-middle-column"> 
        <div class="content">
          <?php if ($title): ?>
            <h1 class="page__title page-title"><?php print $title; ?></h1>
          <?php endif; ?>
          <?php print render($page['content']); ?>
        </div>
      </div>
    </div>
  </div>
  
</div>


