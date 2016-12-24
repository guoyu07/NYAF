<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-loader.inc";
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
    0 => 'yaf-loader.getlibrarypath.php',
    1 => 'Yaf_Loader::getLibraryPath',
  ),
  'up' => 
  array (
    0 => 'class.yaf-loader.php',
    1 => 'Yaf_Loader',
  ),
  'prev' => 
  array (
    0 => 'yaf-loader.getinstance.php',
    1 => 'Yaf_Loader::getInstance',
  ),
  'next' => 
  array (
    0 => 'yaf-loader.getlocalnamespace.php',
    1 => 'Yaf_Loader::getLocalNamespace',
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
<div id="yaf-loader.getlibrarypath" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Loader::getLibraryPath</h1>
  <p class="verinfo">(Yaf &gt;=2.1.4)</p><p class="refpurpose"><span class="refname">Yaf_Loader::getLibraryPath</span> &mdash; <span class="dc-title">get the library path</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-loader.getlibrarypath-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><a href="class.yaf-loader.php" class="type Yaf_Loader">Yaf_Loader</a></span> <span class="methodname"><strong>Yaf_Loader::getLibraryPath</strong></span>
    ([ <span class="methodparam"><span class="type">bool</span> <code class="parameter">$is_global</code><span class="initializer"> = false</span></span>
  ] )</div>

  <p class="para rdfs-comment">

  </p>

  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
currently not documented; only its argument list is available.
</p></div>

 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-loader.getlibrarypath-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-loader.getlibrarypath-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>