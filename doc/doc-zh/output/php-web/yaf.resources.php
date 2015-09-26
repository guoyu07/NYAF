<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/yaf.setup.inc";
$setup = array (
  'home' => 
  array (
    0 => 'index.php',
    1 => 'PHP Manual',
  ),
  'head' => 
  array (
    0 => 'UTF-8',
    1 => 'en',
  ),
  'this' => 
  array (
    0 => 'yaf.resources.php',
    1 => 'Resource Types',
  ),
  'up' => 
  array (
    0 => 'yaf.setup.php',
    1 => 'Installing/Configuring',
  ),
  'prev' => 
  array (
    0 => 'yaf.configuration.php',
    1 => 'Runtime Configuration',
  ),
  'next' => 
  array (
    0 => 'yaf.constants.php',
    1 => 'Predefined Constants',
  ),
  'alternatives' => 
  array (
  ),
);
$setup["toc"] = $TOC;
$setup["parents"] = $PARENTS;
manual_setup($setup);

manual_header();
?>
<div id="yaf.resources" class="section">
  <h2 class="title">Resource Types</h2>
  <p class="para">This extension has no resource types defined.</p>
 </div><?php manual_footer(); ?>