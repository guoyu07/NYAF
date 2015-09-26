<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-request-http.inc";
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
    0 => 'yaf-request-http.isxmlhttprequest.php',
    1 => 'Yaf_Request_Http::isXmlHttpRequest',
  ),
  'up' => 
  array (
    0 => 'class.yaf-request-http.php',
    1 => 'Yaf_Request_Http',
  ),
  'prev' => 
  array (
    0 => 'yaf-request-http.getrequest.php',
    1 => 'Yaf_Request_Http::getRequest',
  ),
  'next' => 
  array (
    0 => 'class.yaf-request-simple.php',
    1 => 'Yaf_Request_Simple',
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
<div id="yaf-request-http.isxmlhttprequest" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Request_Http::isXmlHttpRequest</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Request_Http::isXmlHttpRequest</span> &mdash; <span class="dc-title">Whether a Ajax Request</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-request-http.isxmlhttprequest-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><strong>Yaf_Request_Http::isXmlHttpRequest</strong></span>
    ( <span class="methodparam">void</span>
   )</div>

  <p class="para rdfs-comment">
    Check the request whether it is a Ajax Request.
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      This method depends on the request header: HTTP_X_REQUESTED_WITH, some
      Javascript library doesn&#039;t set this header while doing Ajax request
     </p>
    </p></blockquote>
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-request-http.isxmlhttprequest-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-request-http.isxmlhttprequest-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>


</div><?php manual_footer(); ?>