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
    0 => 'yaf-loader.getlocalnamespace.php',
    1 => 'Yaf_Loader::getLocalNamespace',
  ),
  'up' => 
  array (
    0 => 'class.yaf-loader.php',
    1 => 'Yaf_Loader',
  ),
  'prev' => 
  array (
    0 => 'yaf-loader.getlibrarypath.php',
    1 => 'Yaf_Loader::getLibraryPath',
  ),
  'next' => 
  array (
    0 => 'yaf-loader.import.php',
    1 => 'Yaf_Loader::import',
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
<div id="yaf-loader.getlocalnamespace" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Loader::getLocalNamespace</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Loader::getLocalNamespace</span> &mdash; <span class="dc-title">The getLocalNamespace purpose</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-loader.getlocalnamespace-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>Yaf_Loader::getLocalNamespace</strong></span>
    ( <span class="methodparam">void</span>
   )</div>

  <p class="para rdfs-comment">

  </p>

  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
currently not documented; only its argument list is available.
</p></div>

 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-loader.getlocalnamespace-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-loader.getlocalnamespace-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>