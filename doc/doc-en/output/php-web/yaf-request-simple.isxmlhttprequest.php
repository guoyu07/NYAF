<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-request-simple.inc";
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
    0 => 'yaf-request-simple.isxmlhttprequest.php',
    1 => 'Yaf_Request_Simple::isXmlHttpRequest',
  ),
  'up' => 
  array (
    0 => 'class.yaf-request-simple.php',
    1 => 'Yaf_Request_Simple',
  ),
  'prev' => 
  array (
    0 => 'yaf-request-simple.getrequest.php',
    1 => 'Yaf_Request_Simple::getRequest',
  ),
  'next' => 
  array (
    0 => 'class.yaf-response-abstract.php',
    1 => 'Yaf_Response_Abstract',
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
<div id="yaf-request-simple.isxmlhttprequest" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Request_Simple::isXmlHttpRequest</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Request_Simple::isXmlHttpRequest</span> &mdash; <span class="dc-title">The isXmlHttpRequest purpose</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-request-simple.isxmlhttprequest-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>Yaf_Request_Simple::isXmlHttpRequest</strong></span>
    ( <span class="methodparam">void</span>
   )</div>

  <p class="para rdfs-comment">

  </p>

  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
currently not documented; only its argument list is available.
</p></div>

 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-request-simple.isxmlhttprequest-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-request-simple.isxmlhttprequest-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>