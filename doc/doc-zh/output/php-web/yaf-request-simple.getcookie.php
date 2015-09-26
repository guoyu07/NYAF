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
    0 => 'yaf-request-simple.getcookie.php',
    1 => 'Yaf_Request_Simple::getCookie',
  ),
  'up' => 
  array (
    0 => 'class.yaf-request-simple.php',
    1 => 'Yaf_Request_Simple',
  ),
  'prev' => 
  array (
    0 => 'yaf-request-simple.get.php',
    1 => 'Yaf_Request_Simple::get',
  ),
  'next' => 
  array (
    0 => 'yaf-request-simple.getfiles.php',
    1 => 'Yaf_Request_Simple::getFiles',
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
<div id="yaf-request-simple.getcookie" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Request_Simple::getCookie</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Request_Simple::getCookie</span> &mdash; <span class="dc-title">The getCookie purpose</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-request-simple.getcookie-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>Yaf_Request_Simple::getCookie</strong></span>
    ( <span class="methodparam">void</span>
   )</div>

  <p class="para rdfs-comment">

  </p>

  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
currently not documented; only its argument list is available.
</p></div>

 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-request-simple.getcookie-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-request-simple.getcookie-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>