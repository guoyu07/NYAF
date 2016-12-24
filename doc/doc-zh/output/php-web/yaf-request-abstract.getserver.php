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
    0 => 'yaf-request-abstract.getserver.php',
    1 => 'Yaf_Request_Abstract::getServer',
  ),
  'up' => 
  array (
    0 => 'class.yaf-request-abstract.php',
    1 => 'Yaf_Request_Abstract',
  ),
  'prev' => 
  array (
    0 => 'yaf-request-abstract.getrequesturi.php',
    1 => 'Yaf_Request_Abstract::getRequestUri',
  ),
  'next' => 
  array (
    0 => 'yaf-request-abstract.iscli.php',
    1 => 'Yaf_Request_Abstract::isCli',
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
<div id="yaf-request-abstract.getserver" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Request_Abstract::getServer</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Request_Abstract::getServer</span> &mdash; <span class="dc-title">Retrieve SERVER variable</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-request-abstract.getserver-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>Yaf_Request_Abstract::getServer</strong></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$default</code></span>
  ] )</div>

  <p class="para rdfs-comment">
   Retrieve SERVER variable
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-request-abstract.getserver-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">name</code></dt>

    <dd>

     <p class="para">
       the variable name   
     </p>
    </dd>

   
   
    <dt>
<code class="parameter">default</code></dt>

    <dd>

     <p class="para">
      if this parameter is provide, this will be returned if the variable can
      not be found
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-request-abstract.getserver-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-yaf-request-abstract.getserver-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><strong class="classname">Yaf_Request_Abstract::getParam</strong></li>
   <li class="member"><strong class="classname">Yaf_Request_Abstract::getEnv</strong></li>
  </ul>
 </div>


</div><?php manual_footer(); ?>