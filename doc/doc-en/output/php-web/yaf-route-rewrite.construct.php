<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-route-rewrite.inc";
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
    0 => 'yaf-route-rewrite.construct.php',
    1 => 'Yaf_Route_Rewrite::__construct',
  ),
  'up' => 
  array (
    0 => 'class.yaf-route-rewrite.php',
    1 => 'Yaf_Route_Rewrite',
  ),
  'prev' => 
  array (
    0 => 'yaf-route-rewrite.assemble.php',
    1 => 'Yaf_Route_Rewrite::assemble',
  ),
  'next' => 
  array (
    0 => 'yaf-route-rewrite.route.php',
    1 => 'Yaf_Route_Rewrite::route',
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
<div id="yaf-route-rewrite.construct" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Route_Rewrite::__construct</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Route_Rewrite::__construct</span> &mdash; <span class="dc-title">Yaf_Route_Rewrite constructor</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-route-rewrite.construct-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span><span class="methodname"><strong>Yaf_Route_Rewrite::__construct</strong></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$match</code></span>
   , <span class="methodparam"><span class="type">array</span> <code class="parameter">$route</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$verify</code></span>
  ] )</div>

  <p class="para rdfs-comment">

  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-route-rewrite.construct-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">match</code></dt>

    <dd>

     <p class="para">
       A pattern, will be used to match a request uri, if
       it doesn&#039;t match, <a href="class.yaf-route-rewrite.php" class="classname">Yaf_Route_Rewrite</a> will return
       <strong><code>FALSE</code></strong>.
     </p>
     <p class="para">
      You can use :name style to name segments matched, and use * to match
      the rest of the URL segments.
     </p>
    </dd>

   
   
    <dt>
<code class="parameter">route</code></dt>

    <dd>

     <p class="para">
      When the match pattern matches the request uri,
      <a href="class.yaf-route-rewrite.php" class="classname">Yaf_Route_Rewrite</a> will use this to decide which
      module/controller/action is the destination.
     </p>
     <p class="para">
      Either of module/controller/action in this array is optional, if you don&#039;t assign a
      specific value, it will be routed to default.
     </p>
    </dd>

   
   
    <dt>
<code class="parameter">verify</code></dt>

    <dd>

     <p class="para">
      
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-route-rewrite.construct-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-yaf-route-rewrite.construct-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-68">
   <p><strong>Example #1 <span class="function"><strong>Yaf_Route_Rewrite()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Add&nbsp;a&nbsp;rewrite&nbsp;route&nbsp;to&nbsp;Yaf_Router&nbsp;route&nbsp;stack<br />&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yaf_Dispatcher</span><span style="color: #007700">::</span><span style="color: #0000BB">getInstance</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRouter</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">addRoute</span><span style="color: #007700">(</span><span style="color: #DD0000">"name"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Route_rewrite</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"/product/:name/:id/*"</span><span style="color: #007700">,&nbsp;</span><span style="color: #FF8000">//match&nbsp;request&nbsp;uri&nbsp;leading&nbsp;"/product"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'controller'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"product"</span><span style="color: #007700">,&nbsp;&nbsp;</span><span style="color: #FF8000">//route&nbsp;to&nbsp;product&nbsp;controller,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
/* for http://yourdomain.com/product/foo/22/foo/bar
 * route will result in following values:
 */
array(
  &quot;controller&quot; =&gt; &quot;product&quot;,
  &quot;module&quot;     =&gt; &quot;index&quot;, //(default)
  &quot;action&quot;     =&gt; &quot;index&quot;, //(default)
)

/**
 * and request parameters:
 */
array(
  &quot;name&quot; =&gt; &quot;foo&quot;,
  &quot;id&quot;   =&gt; 22,
  &quot;foo&quot;  =&gt; bar
)
</pre></div>
   </div>
  </div>
  <div class="example" id="example-69">
   <p><strong>Example #2 <span class="function"><strong>Yaf_Route_Rewrite()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Add&nbsp;a&nbsp;rewrite&nbsp;route&nbsp;to&nbsp;Yaf_Router&nbsp;route&nbsp;stack&nbsp;by&nbsp;calling&nbsp;addconfig<br />&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$config&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"name"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"type"&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"rewrite"</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//Yaf_Route_Rewrite&nbsp;route<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"match"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"/user-list/:id"</span><span style="color: #007700">,&nbsp;</span><span style="color: #FF8000">//match&nbsp;only&nbsp;/user/list/?/<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"route"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'controller'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"user"</span><span style="color: #007700">,&nbsp;&nbsp;</span><span style="color: #FF8000">//route&nbsp;to&nbsp;user&nbsp;controller,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'action'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"list"</span><span style="color: #007700">,&nbsp;&nbsp;</span><span style="color: #FF8000">//route&nbsp;to&nbsp;list&nbsp;action<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yaf_Dispatcher</span><span style="color: #007700">::</span><span style="color: #0000BB">getInstance</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRouter</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">addConfig</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Config_Simple</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
/* for http://yourdomain.com/user-list/22
 * route will result in following values:
 */
array(
  &quot;controller&quot; =&gt; &quot;user&quot;,
  &quot;action&quot;     =&gt; &quot;list&quot;,
  &quot;module&quot;     =&gt; &quot;index&quot;, //(default)
)

/**
 * and request parameters:
 */
array(
  &quot;id&quot;   =&gt; 22,
)
</pre></div>
   </div>
  </div>
  <div class="example" id="example-70">
   <p><strong>Example #3 <span class="function"><strong>Yaf_Route_Rewrite(as of 2.3.0)()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Add&nbsp;a&nbsp;rewrite&nbsp;route&nbsp;use&nbsp;match&nbsp;result&nbsp;as&nbsp;m/c/a&nbsp;name<br />&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$config&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"name"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"type"&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"rewrite"</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"match"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"/user-list/:a/:id"</span><span style="color: #007700">,&nbsp;</span><span style="color: #FF8000">//match&nbsp;only&nbsp;/user-list/*<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"route"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'controller'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"user"</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//route&nbsp;to&nbsp;user&nbsp;controller,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'action'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">":a"</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//route&nbsp;to&nbsp;:a&nbsp;action<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yaf_Dispatcher</span><span style="color: #007700">::</span><span style="color: #0000BB">getInstance</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRouter</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">addConfig</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Config_Simple</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
/* for http://yourdomain.com/user-list/list/22
 * route will result in following values:
 */
array(
  &quot;controller&quot; =&gt; &quot;user&quot;,
  &quot;action&quot;     =&gt; &quot;list&quot;,
  &quot;module&quot;     =&gt; &quot;index&quot;, //(default)
)

/**
 * and request parameters:
 */
array(
  &quot;id&quot;   =&gt; 22,
)
</pre></div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-yaf-route-rewrite.construct-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><span class="methodname"><a href="yaf-router.addroute.php" class="methodname" rel="rdfs-seeAlso">Yaf_Router::addRoute()</a> - Add new Route into Router</span></li>
   <li class="member"><span class="methodname"><a href="yaf-router.addconfig.php" class="methodname" rel="rdfs-seeAlso">Yaf_Router::addConfig()</a> - Add config-defined routes into Router</span></li>
   <li class="member"><a href="class.yaf-route-static.php" class="classname">Yaf_Route_Static</a></li>
   <li class="member"><a href="class.yaf-route-supervar.php" class="classname">Yaf_Route_Supervar</a></li>
   <li class="member"><a href="class.yaf-route-simple.php" class="classname">Yaf_Route_Simple</a></li>
   <li class="member"><a href="class.yaf-route-regex.php" class="classname">Yaf_Route_Regex</a></li>
   <li class="member"><a href="class.yaf-route-map.php" class="classname">Yaf_Route_Map</a></li>
  </ul>                       
 </div>
  

</div><?php manual_footer(); ?>