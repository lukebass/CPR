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

  <?php
    print render($content);
  ?>
  
  <?php 
    print render($content['field_tags']);
    print render($content['comments']); 
  ?>
  
</article>
