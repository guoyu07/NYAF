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
    0 => 'yaf-request-abstract.setrouted.php',
    1 => 'Yaf_Request_Abstract::setRouted',
  ),
  'up' => 
  array (
    0 => 'class.yaf-request-abstract.php',
    1 => 'Yaf_Request_Abstract',
  ),
  'prev' => 
  array (
    0 => 'yaf-request-abstract.setrequesturi.php',
    1 => 'Yaf_Request_Abstract::setRequestUri',
  ),
  'next' => 
  array (
    0 => 'class.yaf-request-http.php',
    1 => 'Yaf_Request_Http',
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
<div id="yaf-request-abstract.setrouted" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Request_Abstract::setRouted</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Request_Abstract::setRouted</span> &mdash; <span class="dc-title">The setRouted purpose</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-request-abstract.setrouted-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>Yaf_Request_Abstract::setRouted</strong></span>
    ([ <span class="methodparam"><span class="type">string</span> <code class="parameter">$flag</code></span>
  ] )</div>

  <p class="para rdfs-comment">

  </p>

  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
currently not documented; only its argument list is available.
</p></div>

 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-request-abstract.setrouted-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">flag</code></dt>

    <dd>

     <p class="para">
      
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-request-abstract.setrouted-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>