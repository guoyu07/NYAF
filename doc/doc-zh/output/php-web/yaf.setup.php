<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/book.yaf.inc";
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
    0 => 'yaf.setup.php',
    1 => 'Installing/Configuring',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'intro.yaf.php',
    1 => 'Introduction',
  ),
  'next' => 
  array (
    0 => 'yaf.requirements.php',
    1 => 'Requirements',
  ),
  'alternatives' => 
  array (
  ),
  'extra_header_links' => 
  array (
    'rel' => 'alternate',
    'href' => '/manual/en/feeds/yaf.setup.atom',
    'type' => 'application/atom+xml',
  ),
);
$setup["toc"] = $TOC;
$setup["parents"] = $PARENTS;
manual_setup($setup);

manual_header();
?>
<div id="yaf.setup" class="chapter">
 <h1>Installing/Configuring</h1>
<h2>Table of Contents</h2><ul class="chunklist chunklist_chapter"><li><a href="yaf.requirements.php">Requirements</a></li><li><a href="yaf.installation.php">Installation</a></li><li><a href="yaf.configuration.php">Runtime Configuration</a></li><li><a href="yaf.resources.php">Resource Types</a></li></ul>


 
 
 

 
 
 

 
 






 

 
 
 

</div>
<?php manual_footer(); ?>