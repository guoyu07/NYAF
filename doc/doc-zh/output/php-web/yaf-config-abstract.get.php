<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-config-abstract.inc";
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
    0 => 'yaf-config-abstract.get.php',
    1 => 'Yaf_Config_Abstract::get',
  ),
  'up' => 
  array (
    0 => 'class.yaf-config-abstract.php',
    1 => 'Yaf_Config_Abstract',
  ),
  'prev' => 
  array (
    0 => 'class.yaf-config-abstract.php',
    1 => 'Yaf_Config_Abstract',
  ),
  'next' => 
  array (
    0 => 'yaf-config-abstract.readonly.php',
    1 => 'Yaf_Config_Abstract::readonly',
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
<div id="yaf-config-abstract.get" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Config_Abstract::get</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Config_Abstract::get</span> &mdash; <span class="dc-title">Getter</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-config-abstract.get-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">abstract</span> <span class="modifier">public</span> <span class="type"><a href="language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>Yaf_Config_Abstract::get</strong></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   , <span class="methodparam"><span class="type"><a href="language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>
   )</div>

  <p class="para rdfs-comment">

  </p>

  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
currently not documented; only its argument list is available.
</p></div>

 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-config-abstract.get-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-config-abstract.get-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>