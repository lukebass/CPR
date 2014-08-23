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

  <div class="header-section">
    <div id="header-section-inner" class="header-section-inner">
      <div class="logo">
        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" rel="home"><img src="<?php print $logo; ?>"/></a>
        <?php endif; ?>
      </div>

      <div class="main-nav">
        <?php print render($page['mainnav']); ?>
      </div>

      <div id="tablet-btn" class="tablet-btn">
        <a>Sections <span class="icon-arrow-down"></span></a>
      </div>

      <div id="search-btn" class="search-btn">
        <span class="icon-search"></span>
      </div>  

      <div id="mobile-btn" class="mobile-btn">
        <span class="icon-menu"></span>
      </div>

      <div class="weather-btn">
        <?php print render($page['weather']); ?>
      </div> 
    </div>
  </div>

  <div id="search-section" class="search-section">
    <div id="search-section-inner" class="search-section-inner">
      <div class="search">
        <?php print render($page['search']); ?>
      </div>
    </div>
  </div>

  <div id="tablet-nav" class="tablet-nav">
    <?php print render($page['mainnav']); ?>
  </div>

  <div id="mobile-nav" class="mobile-nav">
    <div class="mobile-search">
      <?php print render($page['search']); ?>
    </div>
    <div class="mobile-mainnav">
      <?php print render($page['mainnav']); ?>
    </div>
  </div>

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

  <div class="footer-top-outter">
    <div id="footer-top-inner" class="footer-top-inner">
      <div class="footer-top">
        <?php print render($page['footertop']); ?>
      </div>
    </div>
  </div>

  <div class="footer-middle-outter">
    <div id="footer-middle-inner" class="footer-middle-inner">
      <div class="footer-middle">
        <?php print render($page['footermiddle']); ?>
      </div>
    </div>
  </div>

  <div class="footer-bottom-outter">
    <div id="footer-bottom-inner" class="footer-bottom-inner">
      <div class="footer-bottom">
        <?php print render($page['footerbottom']); ?>
      </div>
    </div>
  </div>

  <?php print render($page['bottom']); ?>
  
</div>
