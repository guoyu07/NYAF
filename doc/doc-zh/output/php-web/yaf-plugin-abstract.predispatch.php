<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-plugin-abstract.inc";
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
    0 => 'yaf-plugin-abstract.predispatch.php',
    1 => 'Yaf_Plugin_Abstract::preDispatch',
  ),
  'up' => 
  array (
    0 => 'class.yaf-plugin-abstract.php',
    1 => 'Yaf_Plugin_Abstract',
  ),
  'prev' => 
  array (
    0 => 'yaf-plugin-abstract.postdispatch.php',
    1 => 'Yaf_Plugin_Abstract::postDispatch',
  ),
  'next' => 
  array (
    0 => 'yaf-plugin-abstract.preresponse.php',
    1 => 'Yaf_Plugin_Abstract::preResponse',
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
<div id="yaf-plugin-abstract.predispatch" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Plugin_Abstract::preDispatch</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Plugin_Abstract::preDispatch</span> &mdash; <span class="dc-title">The preDispatch purpose</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-plugin-abstract.predispatch-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>Yaf_Plugin_Abstract::preDispatch</strong></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-request-abstract.php" class="type Yaf_Request_Abstract">Yaf_Request_Abstract</a></span> <code class="parameter">$request</code></span>
   , <span class="methodparam"><span class="type"><a href="class.yaf-response-abstract.php" class="type Yaf_Response_Abstract">Yaf_Response_Abstract</a></span> <code class="parameter">$response</code></span>
   )</div>

  <p class="para rdfs-comment">

  </p>

  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
currently not documented; only its argument list is available.
</p></div>

 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-plugin-abstract.predispatch-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">request</code></dt>

    <dd>

     <p class="para">
      
     </p>
    </dd>

   
   
    <dt>
<code class="parameter">response</code></dt>

    <dd>

     <p class="para">
      
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-plugin-abstract.predispatch-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>