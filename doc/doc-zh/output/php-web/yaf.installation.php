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
    0 => 'yaf.installation.php',
    1 => 'Installation',
  ),
  'up' => 
  array (
    0 => 'yaf.setup.php',
    1 => 'Installing/Configuring',
  ),
  'prev' => 
  array (
    0 => 'yaf.requirements.php',
    1 => 'Requirements',
  ),
  'next' => 
  array (
    0 => 'yaf.configuration.php',
    1 => 'Runtime Configuration',
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
<div id="yaf.installation" class="section">
  <h2 class="title">Installation</h2>
  <p class="para">
   This <a href="http://pecl.php.net/" class="link external">&raquo;&nbsp;PECL</a> extension
is not bundled with PHP.
  </p>
  <p class="para">
   Information for installing this PECL extension may be
found in the manual chapter titled <a href="" class="link">Installation
of PECL extensions</a>. Additional information such as new releases,
downloads, source files, maintainer information, and a CHANGELOG, can be
located here: 
   <a href="http://pecl.php.net/package/yaf" class="link external">&raquo;&nbsp;http://pecl.php.net/package/yaf</a>.
  </p>
  <p class="para">
   A <acronym title="Dynamic Link Library">DLL</acronym> for this
<acronym title="PHP Extension and Application Repository">PECL</acronym> extension is currently unavailable. See also the
<a href="" class="link">building on Windows</a>
section.
  </p>
 </div><?php manual_footer(); ?>