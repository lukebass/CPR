<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<article class="node-<?php print $node->nid; ?> <?php print $classes; ?>">

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['field_tags']);
    hide($content['comments']);
    print render($content['field_image']);
  ?>

  <?php if (!$page && $title): ?>
    <header>
      <span class="node__title node-title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></span>
    </header>
  <?php endif; ?>

  <div class="node-left-column">
    <div class="info-wrapper">
      <div class="date-wrapper">
        <span class="icon-calendar"></span>
        <?php
          print render($content['field_date']);
        ?>
      </div>

      <div class="time-wrapper">
        <span class="icon-clock"></span>
        <?php
          print render($content['field_time']);
        ?>
      </div>

      <div class="location-wrapper">
        <span class="icon-location"></span>
        <?php
          print render($content['field_link']);
        ?>
      </div>
    </div>

    <?php
      print render($content);
    ?>
  </div>

  <div class="node-right-column">
  </div>
  
  <?php 
    print render($content['field_tags']);
    print render($content['comments']); 
  ?>
  
</article>
