<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-request-abstract.inc";
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
    0 => 'yaf-request-abstract.ishead.php',
    1 => 'Yaf_Request_Abstract::isHead',
  ),
  'up' => 
  array (
    0 => 'class.yaf-request-abstract.php',
    1 => 'Yaf_Request_Abstract',
  ),
  'prev' => 
  array (
    0 => 'yaf-request-abstract.isget.php',
    1 => 'Yaf_Request_Abstract::isGet',
  ),
  'next' => 
  array (
    0 => 'yaf-request-abstract.isoptions.php',
    1 => 'Yaf_Request_Abstract::isOptions',
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
<div id="yaf-request-abstract.ishead" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Request_Abstract::isHead</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Request_Abstract::isHead</span> &mdash; <span class="dc-title">The isHead purpose</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-request-abstract.ishead-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>Yaf_Request_Abstract::isHead</strong></span>
    ( <span class="methodparam">void</span>
   )</div>

  <p class="para rdfs-comment">

  </p>

  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
currently not documented; only its argument list is available.
</p></div>

 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-request-abstract.ishead-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-request-abstract.ishead-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>