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
    0 => 'intro.yaf.php',
    1 => 'Introduction',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'next' => 
  array (
    0 => 'yaf.setup.php',
    1 => 'Installing/Configuring',
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
<div id="intro.yaf" class="preface">
  <h1 class="title">Introduction</h1>
  <p class="para">
   The <em>Yet Another Framework</em> (<acronym>Yaf</acronym>) extension 
   is a PHP framework that is used to develop web applications.
  </p>
  <p class="para">
   Yaf requires PHP 5.2.1 or greater. Earlier versions may not work.
  </p>
  <p class="para">
   A simple Yaf benchmark can be found at <a href="http://www.laruence.com/2011/12/02/2333.html" class="link external">&raquo;&nbsp;Yaf Performance</a>.
  </p>
  <p class="para">
   For a quick start guide, please refer to the <a href="yaf.tutorials.php" class="link">Tutorials</a> section.
  </p>
 </div><?php manual_footer(); ?>