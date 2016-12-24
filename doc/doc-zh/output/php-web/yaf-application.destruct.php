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
    0 => 'yaf-application.destruct.php',
    1 => 'Yaf_Application::__destruct',
  ),
  'up' => 
  array (
    0 => 'class.yaf-application.php',
    1 => 'Yaf_Application',
  ),
  'prev' => 
  array (
    0 => 'yaf-application.construct.php',
    1 => 'Yaf_Application::__construct',
  ),
  'next' => 
  array (
    0 => 'yaf-application.environ.php',
    1 => 'Yaf_Application::environ',
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
<div id="yaf-application.destruct" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Application::__destruct</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Application::__destruct</span> &mdash; <span class="dc-title">The __destruct purpose</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-application.destruct-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>Yaf_Application::__destruct</strong></span>
    ( <span class="methodparam">void</span>
   )</div>

  <p class="para rdfs-comment">

  </p>



 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-application.destruct-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-application.destruct-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>