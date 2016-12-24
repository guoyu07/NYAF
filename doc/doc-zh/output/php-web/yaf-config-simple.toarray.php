<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-config-simple.inc";
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
    0 => 'yaf-config-simple.toarray.php',
    1 => 'Yaf_Config_Simple::toArray',
  ),
  'up' => 
  array (
    0 => 'class.yaf-config-simple.php',
    1 => 'Yaf_Config_Simple',
  ),
  'prev' => 
  array (
    0 => 'yaf-config-simple.set.php',
    1 => 'Yaf_Config_Simple::__set',
  ),
  'next' => 
  array (
    0 => 'yaf-config-simple.valid.php',
    1 => 'Yaf_Config_Simple::valid',
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
<div id="yaf-config-simple.toarray" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Config_Simple::toArray</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Config_Simple::toArray</span> &mdash; <span class="dc-title">Returns a PHP array</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-config-simple.toarray-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><strong>Yaf_Config_Simple::toArray</strong></span>
    ( <span class="methodparam">void</span>
   )</div>

  <p class="para rdfs-comment">
    Returns a PHP array from the <a href="class.yaf-config-simple.php" class="classname">Yaf_Config_Simple</a>
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-config-simple.toarray-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-config-simple.toarray-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>