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
    0 => 'yaf-router.addconfig.php',
    1 => 'Yaf_Router::addConfig',
  ),
  'up' => 
  array (
    0 => 'class.yaf-router.php',
    1 => 'Yaf_Router',
  ),
  'prev' => 
  array (
    0 => 'class.yaf-router.php',
    1 => 'Yaf_Router',
  ),
  'next' => 
  array (
    0 => 'yaf-router.addroute.php',
    1 => 'Yaf_Router::addRoute',
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
<div id="yaf-router.addconfig" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Router::addConfig</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Router::addConfig</span> &mdash; <span class="dc-title">Add config-defined routes into Router</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-router.addconfig-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><strong>Yaf_Router::addConfig</strong></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-config-abstract.php" class="type Yaf_Config_Abstract">Yaf_Config_Abstract</a></span> <code class="parameter">$config</code></span>
   )</div>

  <p class="para rdfs-comment">
    Add routes defined by configs into
    <a href="class.yaf-router.php" class="classname">Yaf_Router</a>&#039;s route stack
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-router.addconfig-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-router.addconfig-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
     An <a href="class.yaf-config-abstract.php" class="classname">Yaf_Config_Abstract</a> instance, which should
     contains one or more valid route configs
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-yaf-router.addconfig-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-76">
   <p><strong>Example #1 <span class="function"><strong>application.ini()</strong></span>example</strong></p>
   <div class="example-contents">
    <div class="inicode"><pre class="inicode">;the order is very important, the prior one will be called first

;a rewrite route match request /product/*/*
routes.route_name.type=&quot;rewrite&quot;
routes.route_name.match=&quot;/product/:name/:value&quot;
routes.route_name.route.controller=product
routes.route_name.route.action=info

;a regex route match request /list/*/*
routes.route_name1.type=&quot;regex&quot;
routes.route_name1.match=&quot;#^list/([^/]*)/([^/]*)#&quot;
routes.route_name1.route.controller=Index
routes.route_name1.route.action=action
routes.route_name1.map.1=name
routes.route_name1.map.2=value

;a simple route match /**?c=controller&amp;a=action&amp;m=module
routes.route_name2.type=&quot;simple&quot;
routes.route_name2.controller=c
routes.route_name2.module=m
routes.route_name2.action=a

;a simple router match /**?r=PATH_INFO
routes.route_name3.type=&quot;supervar&quot;
routes.route_name3.varname=r

;a map route match any request to controller
routes.route_name4.type=&quot;map&quot;
routes.route_name4.controllerPrefer=TRUE
routes.route_namer.delimiter=&quot;#!&quot;</pre>
</div>
   </div>

  </div>
  <div class="example" id="example-77">
   <p><strong>Example #2 <span class="function"><strong>Yaf_Dispatcher::autoConfig()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">Bootstrap&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">Yaf_Bootstrap_Abstract</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">_initConfig</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$config&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yaf_Application</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getConfig</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yaf_Registry</span><span style="color: #007700">::</span><span style="color: #0000BB">set</span><span style="color: #007700">(</span><span style="color: #DD0000">"config"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$config</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">_initRoute</span><span style="color: #007700">(</span><span style="color: #0000BB">Yaf_Dispatcher&nbsp;$dispatcher</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$router&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$dispatcher</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRouter</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;we&nbsp;can&nbsp;add&nbsp;some&nbsp;pre-defined&nbsp;routes&nbsp;in&nbsp;application.ini<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$router</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addConfig</span><span style="color: #007700">(</span><span style="color: #0000BB">Yaf_Registry</span><span style="color: #007700">::</span><span style="color: #0000BB">get</span><span style="color: #007700">(</span><span style="color: #DD0000">"config"</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">routes</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-yaf-router.addconfig-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><span class="methodname"><a href="yaf-router.addroute.php" class="methodname" rel="rdfs-seeAlso">Yaf_Router::addRoute()</a> - Add new Route into Router</span></li>
   <li class="member"><a href="class.yaf-route-static.php" class="classname">Yaf_Route_Static</a></li>
   <li class="member"><a href="class.yaf-route-supervar.php" class="classname">Yaf_Route_Supervar</a></li>
   <li class="member"><a href="class.yaf-route-simple.php" class="classname">Yaf_Route_Simple</a></li>
   <li class="member"><a href="class.yaf-route-regex.php" class="classname">Yaf_Route_Regex</a></li>
   <li class="member"><a href="class.yaf-route-rewrite.php" class="classname">Yaf_Route_Rewrite</a></li>
   <li class="member"><a href="class.yaf-route-map.php" class="classname">Yaf_Route_Map</a></li>
  </ul>                       
 </div>
  

</div><?php manual_footer(); ?>