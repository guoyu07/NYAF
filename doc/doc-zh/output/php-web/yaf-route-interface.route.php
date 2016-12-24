<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-route-interface.inc";
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
    0 => 'yaf-route-interface.route.php',
    1 => 'Yaf_Route_Interface::route',
  ),
  'up' => 
  array (
    0 => 'class.yaf-route-interface.php',
    1 => 'Yaf_Route_Interface',
  ),
  'prev' => 
  array (
    0 => 'yaf-route-interface.assemble.php',
    1 => 'Yaf_Route_Interface::assemble',
  ),
  'next' => 
  array (
    0 => 'class.yaf-route-map.php',
    1 => 'Yaf_Route_Map',
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
<div id="yaf-route-interface.route" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Route_Interface::route</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Route_Interface::route</span> &mdash; <span class="dc-title">route a request</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-route-interface.route-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">abstract</span> <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><strong>Yaf_Route_Interface::route</strong></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-request-abstract.php" class="type Yaf_Request_Abstract">Yaf_Request_Abstract</a></span> <code class="parameter">$request</code></span>
   )</div>

  <p class="para rdfs-comment">
    <span class="methodname"><strong>Yaf_Route_Interface::route()</strong></span> is the only method
    that a custom route should implement.
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      since of 2.3.0, there is another method should also be implemented,
      see <span class="methodname"><a href="yaf-route-interface.assemble.php" class="methodname">Yaf_Route_Interface::assemble()</a></span>.
     </p>
    </p></blockquote>
  </p>
  <p class="para">
    if this method return <strong><code>TRUE</code></strong>, then the route process will be end. otherwise,
    <a href="class.yaf-router.php" class="classname">Yaf_Router</a> will call next route in the route stack
    to route request.
  </p>

  <p class="para">
    This method would set the route result to the parameter request, by
    calling <span class="methodname"><a href="yaf-request-abstract.setcontrollername.php" class="methodname">Yaf_Request_Abstract::setControllerName()</a></span>,
    <span class="methodname"><a href="yaf-request-abstract.setactionname.php" class="methodname">Yaf_Request_Abstract::setActionName()</a></span> and
    <span class="methodname"><a href="yaf-request-abstract.setmodulename.php" class="methodname">Yaf_Request_Abstract::setModuleName()</a></span>.
   </p>

   <p class="para">
    This method should also call
    <span class="methodname"><a href="yaf-request-abstract.setrouted.php" class="methodname">Yaf_Request_Abstract::setRouted()</a></span> to make the
    request routed at last.
   </p>

 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-route-interface.route-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">request</code></dt>

    <dd>

     <p class="para">
       A <a href="class.yaf-request-abstract.php" class="classname">Yaf_Request_Abstract</a> instance.
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-route-interface.route-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>