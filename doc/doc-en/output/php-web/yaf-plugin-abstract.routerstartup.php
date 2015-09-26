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
    0 => 'yaf-plugin-abstract.routerstartup.php',
    1 => 'Yaf_Plugin_Abstract::routerStartup',
  ),
  'up' => 
  array (
    0 => 'class.yaf-plugin-abstract.php',
    1 => 'Yaf_Plugin_Abstract',
  ),
  'prev' => 
  array (
    0 => 'yaf-plugin-abstract.routershutdown.php',
    1 => 'Yaf_Plugin_Abstract::routerShutdown',
  ),
  'next' => 
  array (
    0 => 'class.yaf-registry.php',
    1 => 'Yaf_Registry',
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
<div id="yaf-plugin-abstract.routerstartup" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Plugin_Abstract::routerStartup</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Plugin_Abstract::routerStartup</span> &mdash; <span class="dc-title">RouterStartup hook</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-plugin-abstract.routerstartup-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>Yaf_Plugin_Abstract::routerStartup</strong></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-request-abstract.php" class="type Yaf_Request_Abstract">Yaf_Request_Abstract</a></span> <code class="parameter">$request</code></span>
   , <span class="methodparam"><span class="type"><a href="class.yaf-response-abstract.php" class="type Yaf_Response_Abstract">Yaf_Response_Abstract</a></span> <code class="parameter">$response</code></span>
   )</div>

  <p class="para rdfs-comment">
    This is the earliest hook in Yaf plugin hook system, if a custom plugin
    implement this method, then it will be called before routing a request.
  </p>

  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
currently not documented; only its argument list is available.
</p></div>

 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-plugin-abstract.routerstartup-parameters">
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


 <div class="refsect1 returnvalues" id="refsect1-yaf-plugin-abstract.routerstartup-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-yaf-plugin-abstract.routerstartup-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><span class="methodname"><a href="yaf-plugin-abstract.routershutdown.php" class="methodname" rel="rdfs-seeAlso">Yaf_Plugin_Abstract::routerShutdown()</a> - The routerShutdown purpose</span></li>
   <li class="member"><span class="methodname"><a href="yaf-plugin-abstract.dispatchloopstartup.php" class="methodname" rel="rdfs-seeAlso">Yaf_Plugin_Abstract::dispatchLoopStartup()</a> - The dispatchLoopStartup purpose</span></li>
   <li class="member"><span class="methodname"><a href="yaf-plugin-abstract.predispatch.php" class="methodname" rel="rdfs-seeAlso">Yaf_Plugin_Abstract::preDispatch()</a> - The preDispatch purpose</span></li>
   <li class="member"><span class="methodname"><a href="yaf-plugin-abstract.postdispatch.php" class="methodname" rel="rdfs-seeAlso">Yaf_Plugin_Abstract::postDispatch()</a> - The postDispatch purpose</span></li>
   <li class="member"><span class="methodname"><a href="yaf-plugin-abstract.dispatchloopshutdown.php" class="methodname" rel="rdfs-seeAlso">Yaf_Plugin_Abstract::dispatchLoopShutdown()</a> - The dispatchLoopShutdown purpose</span></li>
  </ul>
 </div>



</div><?php manual_footer(); ?>