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
    0 => 'yaf-router.addroute.php',
    1 => 'Yaf_Router::addRoute',
  ),
  'up' => 
  array (
    0 => 'class.yaf-router.php',
    1 => 'Yaf_Router',
  ),
  'prev' => 
  array (
    0 => 'yaf-router.addconfig.php',
    1 => 'Yaf_Router::addConfig',
  ),
  'next' => 
  array (
    0 => 'yaf-router.construct.php',
    1 => 'Yaf_Router::__construct',
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
<div id="yaf-router.addroute" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Router::addRoute</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Router::addRoute</span> &mdash; <span class="dc-title">Add new Route into Router</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-router.addroute-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><strong>Yaf_Router::addRoute</strong></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   , <span class="methodparam"><span class="type"><span class="type Yaf_Route_Abstract">Yaf_Route_Abstract</span></span> <code class="parameter">$route</code></span>
   )</div>

  <p class="para rdfs-comment">
    defaultly, Yaf_Router using a <a href="class.yaf-route-static.php" class="classname">Yaf_Route_Static</a> as its defualt route. you
    can add new routes into router&#039;s route stack by calling this method.
  </p>
  <p class="para">
    the newer route will be called before the older(route stack), and if the newer router return
    <strong><code>TRUE</code></strong>, the router process will be end. otherwise, the older one will be
    called.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-router.addroute-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-router.addroute-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-yaf-router.addroute-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-78">
   <p><strong>Example #1 <span class="function"><a href="yaf-dispatcher.autorender.php" class="function">Yaf_Dispatcher::autoRender()</a></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">Bootstrap&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">Yaf_Bootstrap_Abstract</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">_initConfig</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$config&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yaf_Application</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getConfig</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yaf_Registry</span><span style="color: #007700">::</span><span style="color: #0000BB">set</span><span style="color: #007700">(</span><span style="color: #DD0000">"config"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$config</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">_initRoute</span><span style="color: #007700">(</span><span style="color: #0000BB">Yaf_Dispatcher&nbsp;$dispatcher</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$router&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$dispatcher</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRouter</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;we&nbsp;can&nbsp;add&nbsp;some&nbsp;pre-defined&nbsp;routes&nbsp;in&nbsp;application.ini<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$router</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addConfig</span><span style="color: #007700">(</span><span style="color: #0000BB">Yaf_Registry</span><span style="color: #007700">::</span><span style="color: #0000BB">get</span><span style="color: #007700">(</span><span style="color: #DD0000">"config"</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">routes</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;add&nbsp;a&nbsp;Rewrite&nbsp;route,&nbsp;then&nbsp;for&nbsp;a&nbsp;request&nbsp;uri:&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;http://***/</span><span style="color: #0000BB">product</span><span style="color: #007700">/list/</span><span style="color: #0000BB">22</span><span style="color: #007700">/</span><span style="color: #0000BB">foo<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">*&nbsp;</span><span style="color: #0000BB">will&nbsp;be&nbsp;matched&nbsp;by&nbsp;this&nbsp;route</span><span style="color: #007700">,&nbsp;and&nbsp;</span><span style="color: #0000BB">result</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;[</span><span style="color: #0000BB">module</span><span style="color: #007700">]&nbsp;=&gt;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;[</span><span style="color: #0000BB">controller</span><span style="color: #007700">]&nbsp;=&gt;&nbsp;</span><span style="color: #0000BB">product<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">*&nbsp;&nbsp;[</span><span style="color: #0000BB">action</span><span style="color: #007700">]&nbsp;=&gt;&nbsp;</span><span style="color: #0000BB">info<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">*&nbsp;&nbsp;[</span><span style="color: #0000BB">method</span><span style="color: #007700">]&nbsp;=&gt;&nbsp;</span><span style="color: #0000BB">GET<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">*&nbsp;&nbsp;[</span><span style="color: #0000BB">params</span><span style="color: #007700">:protected]&nbsp;=&gt;&nbsp;Array<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #0000BB">id</span><span style="color: #007700">]&nbsp;=&gt;&nbsp;</span><span style="color: #0000BB">22<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #0000BB">name</span><span style="color: #007700">]&nbsp;=&gt;&nbsp;</span><span style="color: #0000BB">foo<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$route&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Route_Rewrite</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"/product/list/:id/:name"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"controller"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"product"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"action"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"info"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$router</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addRoute</span><span style="color: #007700">(</span><span style="color: #DD0000">'dummy'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$route</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-yaf-router.addroute-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><span class="methodname"><a href="yaf-router.addconfig.php" class="methodname" rel="rdfs-seeAlso">Yaf_Router::addConfig()</a> - Add config-defined routes into Router</span></li>
   <li class="member"><a href="class.yaf-route-static.php" class="classname">Yaf_Route_Static</a></li>
   <li class="member"><a href="class.yaf-route-supervar.php" class="classname">Yaf_Route_Supervar</a></li>
   <li class="member"><a href="class.yaf-route-simple.php" class="classname">Yaf_Route_Simple</a></li>
   <li class="member"><a href="class.yaf-route-regex.php" class="classname">Yaf_Route_Regex</a></li>
   <li class="member"><a href="class.yaf-route-rewrite.php" class="classname">Yaf_Route_Rewrite</a></li>
   <li class="member"><a href="class.yaf-route-map.php" class="classname">Yaf_Route_Map</a></li>
  </ul>                       
 </div>
  

</div><?php manual_footer(); ?>