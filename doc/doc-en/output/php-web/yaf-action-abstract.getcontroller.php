<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-action-abstract.inc";
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
    0 => 'yaf-action-abstract.getcontroller.php',
    1 => 'Yaf_Action_Abstract::getController',
  ),
  'up' => 
  array (
    0 => 'class.yaf-action-abstract.php',
    1 => 'Yaf_Action_Abstract',
  ),
  'prev' => 
  array (
    0 => 'yaf-action-abstract.execute.php',
    1 => 'Yaf_Action_Abstract::execute',
  ),
  'next' => 
  array (
    0 => 'class.yaf-view-interface.php',
    1 => 'Yaf_View_Interface',
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
<div id="yaf-action-abstract.getcontroller" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Action_Abstract::getController</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Action_Abstract::getController</span> &mdash; <span class="dc-title">Retrieve controller object</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-action-abstract.getcontroller-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span><span class="type"><a href="class.yaf-controller-abstract.php" class="type Yaf_Controller_Abstract">Yaf_Controller_Abstract</a></span> <span class="methodname"><strong>Yaf_Action_Abstract::getController</strong></span>
    ( <span class="methodparam">void</span>
   )</div>

  <p class="para rdfs-comment">
   retrieve current controller object.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-action-abstract.getcontroller-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-action-abstract.getcontroller-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   <a href="class.yaf-controller-abstract.php" class="classname">Yaf_Controller_Abstract</a> instance
  </p>
 </div>



</div><?php manual_footer(); ?>