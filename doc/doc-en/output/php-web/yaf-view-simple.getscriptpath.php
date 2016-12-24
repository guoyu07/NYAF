<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-view-simple.inc";
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
    0 => 'yaf-view-simple.getscriptpath.php',
    1 => 'Yaf_View_Simple::getScriptPath',
  ),
  'up' => 
  array (
    0 => 'class.yaf-view-simple.php',
    1 => 'Yaf_View_Simple',
  ),
  'prev' => 
  array (
    0 => 'yaf-view-simple.get.php',
    1 => 'Yaf_View_Simple::__get',
  ),
  'next' => 
  array (
    0 => 'yaf-view-simple.isset.php',
    1 => 'Yaf_View_Simple::__isset',
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
<div id="yaf-view-simple.getscriptpath" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_View_Simple::getScriptPath</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_View_Simple::getScriptPath</span> &mdash; <span class="dc-title">Get templates directory</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-view-simple.getscriptpath-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><strong>Yaf_View_Simple::getScriptPath</strong></span>
    ( <span class="methodparam">void</span>
   )</div>

  <p class="para rdfs-comment">

  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-view-simple.getscriptpath-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-view-simple.getscriptpath-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>