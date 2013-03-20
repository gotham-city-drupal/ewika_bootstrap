<?php
/**
 * @file
 * Template for Ewika.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>
<div class="ewika-content">
  <div class="row">
    <div class="span3 bs-docs-sidebar">
      <ul class="nav nav-list bs-docs-sidenav">
        <li class="logo"><?php print $content['logo']; ?>
        </li>
        <div class="ewika-menu-top">
          <?php print $content['menu']; ?>
        </div>
      </ul>
    </div>

    <div class="span9">
      <?php print $content['main']; ?>
    </div>
  </div>
</div>





