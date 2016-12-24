<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-router.inc";
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
    0 => 'yaf-router.getroute.php',
    1 => 'Yaf_Router::getRoute',
  ),
  'up' => 
  array (
    0 => 'class.yaf-router.php',
    1 => 'Yaf_Router',
  ),
  'prev' => 
  array (
    0 => 'yaf-router.getcurrentroute.php',
    1 => 'Yaf_Router::getCurrentRoute',
  ),
  'next' => 
  array (
    0 => 'yaf-router.getroutes.php',
    1 => 'Yaf_Router::getRoutes',
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
<div id="yaf-router.getroute" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Router::getRoute</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Router::getRoute</span> &mdash; <span class="dc-title">Retrieve a route by name</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-router.getroute-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><a href="class.yaf-route-interface.php" class="type Yaf_Route_Interface">Yaf_Route_Interface</a></span> <span class="methodname"><strong>Yaf_Router::getRoute</strong></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   )</div>

  <p class="para rdfs-comment">
   Retrieve a route by name, see also
   <span class="methodname"><a href="yaf-router.getcurrentroute.php" class="methodname">Yaf_Router::getCurrentRoute()</a></span>
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-router.getroute-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-router.getroute-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



 <div class="refsect1 seealso" id="refsect1-yaf-router.getroute-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><a href="class.yaf-bootstrap-abstract.php" class="classname">Yaf_Bootstrap_Abstract</a></li>
   <li class="member"><a href="class.yaf-plugin-abstract.php" class="classname">Yaf_Plugin_Abstract</a></li>
   <li class="member"><span class="methodname"><a href="yaf-router.addroute.php" class="methodname" rel="rdfs-seeAlso">Yaf_Router::addRoute()</a> - Add new Route into Router</span></li>
   <li class="member"><span class="methodname"><a href="yaf-router.getcurrentroute.php" class="methodname" rel="rdfs-seeAlso">Yaf_Router::getCurrentRoute()</a> - Get the effective route name</span></li>
  </ul>                       
 </div>
  

</div><?php manual_footer(); ?>