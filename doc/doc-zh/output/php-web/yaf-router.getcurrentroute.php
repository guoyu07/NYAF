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
    0 => 'yaf-router.getcurrentroute.php',
    1 => 'Yaf_Router::getCurrentRoute',
  ),
  'up' => 
  array (
    0 => 'class.yaf-router.php',
    1 => 'Yaf_Router',
  ),
  'prev' => 
  array (
    0 => 'yaf-router.construct.php',
    1 => 'Yaf_Router::__construct',
  ),
  'next' => 
  array (
    0 => 'yaf-router.getroute.php',
    1 => 'Yaf_Router::getRoute',
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
<div id="yaf-router.getcurrentroute" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Router::getCurrentRoute</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Router::getCurrentRoute</span> &mdash; <span class="dc-title">Get the effective route name</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-router.getcurrentroute-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><strong>Yaf_Router::getCurrentRoute</strong></span>
    ( <span class="methodparam">void</span>
   )</div>

  <p class="para rdfs-comment">
   Get the name of the route which is effective in the route process.
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     You should call this method after the route process finished, since
     before that, this method will always return <strong><code>NULL</code></strong>.
    </p>
   </p></blockquote>
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-router.getcurrentroute-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-router.getcurrentroute-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   String, the name of the effective route.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-yaf-router.getcurrentroute-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-79">
   <p><strong>Example #1 Register some routes in Bootstrap</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">Bootstrap&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">Yaf_Bootstrap_Abstract</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">_initConfig</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$config&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yaf_Application</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getConfig</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yaf_Registry</span><span style="color: #007700">::</span><span style="color: #0000BB">set</span><span style="color: #007700">(</span><span style="color: #DD0000">"config"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$config</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">_initRoute</span><span style="color: #007700">(</span><span style="color: #0000BB">Yaf_Dispatcher&nbsp;$dispatcher</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$router&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$dispatcher</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRouter</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rewrite_route&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Route_Rewrite</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"/product/list/:page"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"controller"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"product"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"action"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"list"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);&nbsp;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$regex_route&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Route_Rewrite</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"#^/product/info/(\d+)"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"controller"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"product"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"action"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"info"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$router</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addRoute</span><span style="color: #007700">(</span><span style="color: #DD0000">'rewrite'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$rewrite_route</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">addRoute</span><span style="color: #007700">(</span><span style="color: #DD0000">'regex'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$regex_route</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;register&nbsp;plugin&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__initPlugins</span><span style="color: #007700">(</span><span style="color: #0000BB">Yaf_Dispatcher&nbsp;$dispatcher</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dispatcher</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPlugin</span><span style="color: #007700">(new&nbsp;</span><span style="color: #0000BB">DummyPlugin</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

  </div>
  <div class="example" id="example-80">
   <p><strong>Example #2 plugin Dummy.php (under <a href="yaf.appconfig.php#configuration.yaf.directory" class="link">application.directory</a>/plugins)</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">DummyPlugin&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">Yaf_Plugin_Abstract&nbsp;</span><span style="color: #007700">{<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">routerShutdown</span><span style="color: #007700">(</span><span style="color: #0000BB">Yaf_Request_Abstract&nbsp;$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Yaf_Response_Abstract&nbsp;$response</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">Yaf_Dispatcher</span><span style="color: #007700">::</span><span style="color: #0000BB">getInstance</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRouter</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getCurrentRoute</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /></span><span style="color: #0000BB">?&gt;<br /></span>?&gt;</span>
</code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
/* for http://yourdomain.com/product/list/1
 * DummyPlugin will output:
 */
string(7) &quot;rewrite&quot;

/* for http://yourdomain.com/product/info/34
 * DummyPlugin will output:
 */
string(5) &quot;regex&quot;

/* for other request URI
 * DummyPlugin will output:
 */
string(8) &quot;_default&quot;
</pre></div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-yaf-router.getcurrentroute-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><a href="class.yaf-bootstrap-abstract.php" class="classname">Yaf_Bootstrap_Abstract</a></li>
   <li class="member"><a href="class.yaf-plugin-abstract.php" class="classname">Yaf_Plugin_Abstract</a></li>
   <li class="member"><span class="methodname"><a href="yaf-router.addroute.php" class="methodname" rel="rdfs-seeAlso">Yaf_Router::addRoute()</a> - Add new Route into Router</span></li>
  </ul>                       
 </div>
  

</div><?php manual_footer(); ?>