<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-controller-abstract.inc";
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
    0 => 'yaf-controller-abstract.clone.php',
    1 => 'Yaf_Controller_Abstract::__clone',
  ),
  'up' => 
  array (
    0 => 'class.yaf-controller-abstract.php',
    1 => 'Yaf_Controller_Abstract',
  ),
  'prev' => 
  array (
    0 => 'class.yaf-controller-abstract.php',
    1 => 'Yaf_Controller_Abstract',
  ),
  'next' => 
  array (
    0 => 'yaf-controller-abstract.construct.php',
    1 => 'Yaf_Controller_Abstract::__construct',
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
<div id="yaf-controller-abstract.clone" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Controller_Abstract::__clone</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Controller_Abstract::__clone</span> &mdash; <span class="dc-title">Yaf_Controller_Abstract can not be cloned</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-controller-abstract.clone-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">final</span> <span class="modifier">private</span> <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>Yaf_Controller_Abstract::__clone</strong></span>
    ( <span class="methodparam">void</span>
   )</div>

  <p class="para rdfs-comment">

  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-controller-abstract.clone-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-controller-abstract.clone-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>