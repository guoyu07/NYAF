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
    0 => 'yaf-request-abstract.setbaseuri.php',
    1 => 'Yaf_Request_Abstract::setBaseUri',
  ),
  'up' => 
  array (
    0 => 'class.yaf-request-abstract.php',
    1 => 'Yaf_Request_Abstract',
  ),
  'prev' => 
  array (
    0 => 'yaf-request-abstract.setactionname.php',
    1 => 'Yaf_Request_Abstract::setActionName',
  ),
  'next' => 
  array (
    0 => 'yaf-request-abstract.setcontrollername.php',
    1 => 'Yaf_Request_Abstract::setControllerName',
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
<div id="yaf-request-abstract.setbaseuri" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Request_Abstract::setBaseUri</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Request_Abstract::setBaseUri</span> &mdash; <span class="dc-title">set base URI</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-request-abstract.setbaseuri-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><strong>Yaf_Request_Abstract::setBaseUri</strong></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$uir</code></span>
   )</div>

  <p class="para rdfs-comment">
   Set base URI, base URI is used when doing routing, in routing phase request
   URI is used to route a request,  while base URI is used to skip the
   leadding part(base URI) of request URI.

   That is, if comes a request with request URI a/b/c, then if you set base
   URI to &quot;a/b&quot;, only &quot;/c&quot; will be used in routing phase.
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     generally, you don&#039;t need to set this, Yaf will determine it automatically.
    </p>
   </p></blockquote>
  </p>

 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-request-abstract.setbaseuri-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">uir</code></dt>

    <dd>

     <p class="para">
       base URI
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-request-abstract.setbaseuri-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   bool
  </p>
 </div>



</div><?php manual_footer(); ?>