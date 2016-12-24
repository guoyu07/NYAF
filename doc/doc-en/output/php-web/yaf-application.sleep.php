<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-application.inc";
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
    0 => 'yaf-application.sleep.php',
    1 => 'Yaf_Application::__sleep',
  ),
  'up' => 
  array (
    0 => 'class.yaf-application.php',
    1 => 'Yaf_Application',
  ),
  'prev' => 
  array (
    0 => 'yaf-application.setappdirectory.php',
    1 => 'Yaf_Application::setAppDirectory',
  ),
  'next' => 
  array (
    0 => 'yaf-application.wakeup.php',
    1 => 'Yaf_Application::__wakeup',
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
<div id="yaf-application.sleep" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Application::__sleep</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Application::__sleep</span> &mdash; <span class="dc-title">Yaf_Application can not be serialized</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-application.sleep-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">private</span> <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>Yaf_Application::__sleep</strong></span>
    ( <span class="methodparam">void</span>
   )</div>

  <p class="para rdfs-comment">

  </p>



 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-application.sleep-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-application.sleep-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>