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
    0 => 'yaf-controller-abstract.getview.php',
    1 => 'Yaf_Controller_Abstract::getView',
  ),
  'up' => 
  array (
    0 => 'class.yaf-controller-abstract.php',
    1 => 'Yaf_Controller_Abstract',
  ),
  'prev' => 
  array (
    0 => 'yaf-controller-abstract.getresponse.php',
    1 => 'Yaf_Controller_Abstract::getResponse',
  ),
  'next' => 
  array (
    0 => 'yaf-controller-abstract.getviewpath.php',
    1 => 'Yaf_Controller_Abstract::getViewpath',
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
<div id="yaf-controller-abstract.getview" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Controller_Abstract::getView</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Controller_Abstract::getView</span> &mdash; <span class="dc-title">Retrieve the view engine</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-controller-abstract.getview-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><a href="class.yaf-view-interface.php" class="type Yaf_View_Interface">Yaf_View_Interface</a></span> <span class="methodname"><strong>Yaf_Controller_Abstract::getView</strong></span>
    ( <span class="methodparam">void</span>
   )</div>

  <p class="para rdfs-comment">
   retrieve view engine
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-controller-abstract.getview-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-controller-abstract.getview-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>