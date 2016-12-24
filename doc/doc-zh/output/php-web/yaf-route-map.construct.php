<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-route-map.inc";
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
    0 => 'yaf-route-map.construct.php',
    1 => 'Yaf_Route_Map::__construct',
  ),
  'up' => 
  array (
    0 => 'class.yaf-route-map.php',
    1 => 'Yaf_Route_Map',
  ),
  'prev' => 
  array (
    0 => 'yaf-route-map.assemble.php',
    1 => 'Yaf_Route_Map::assemble',
  ),
  'next' => 
  array (
    0 => 'yaf-route-map.route.php',
    1 => 'Yaf_Route_Map::route',
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
<div id="yaf-route-map.construct" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Route_Map::__construct</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Route_Map::__construct</span> &mdash; <span class="dc-title">The __construct purpose</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-route-map.construct-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>Yaf_Route_Map::__construct</strong></span>
    ([ <span class="methodparam"><span class="type">string</span> <code class="parameter">$controller_prefer</code><span class="initializer"> = false</span></span>
   [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$delimiter</code><span class="initializer"> = &quot;&quot;</span></span>
  ]] )</div>

  <p class="para rdfs-comment">

  </p>

  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
currently not documented; only its argument list is available.
</p></div>

 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-route-map.construct-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">controller_prefer</code></dt>

    <dd>

     <p class="para">
      Whether the result should considering as controller or action
     </p>
    </dd>

   
   
    <dt>
<code class="parameter">delimiter</code></dt>

    <dd>

     <p class="para">
      
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-route-map.construct-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-yaf-route-map.construct-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-60">
   <p><strong>Example #1 <span class="function"><strong>Yaf_Route_Map()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Add&nbsp;a&nbsp;map&nbsp;route&nbsp;to&nbsp;Yaf_Router&nbsp;route&nbsp;stack<br />&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yaf_Dispatcher</span><span style="color: #007700">::</span><span style="color: #0000BB">getInstance</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRouter</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">addRoute</span><span style="color: #007700">(</span><span style="color: #DD0000">"name"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Route_Map</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
/* for http://yourdomain.com/product/foo/bar
 * route will result in following values:
 */
array(
  &quot;controller&quot; =&gt; &quot;product_foo_bar&quot;,
)
</pre></div>
   </div>
  </div>
  <div class="example" id="example-61">
   <p><strong>Example #2 <span class="function"><strong>Yaf_Route_Map()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Add&nbsp;a&nbsp;map&nbsp;route&nbsp;to&nbsp;Yaf_Router&nbsp;route&nbsp;stack<br />&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yaf_Dispatcher</span><span style="color: #007700">::</span><span style="color: #0000BB">getInstance</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRouter</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">addRoute</span><span style="color: #007700">(</span><span style="color: #DD0000">"name"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Route_Map</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"_"</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
/* for http://yourdomain.com/user/list/_/foo/22
 * route will result in following values:
 */
array(
    &quot;action&quot; =&gt; &quot;user_list&quot;,
)

/**
 * and request parameters:
 */
array(
  &quot;foo&quot;   =&gt; 22,
)
</pre></div>
   </div>
  </div>
  <div class="example" id="example-62">
   <p><strong>Example #3 <span class="function"><strong>Yaf_Route_Map()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Add&nbsp;a&nbsp;map&nbsp;route&nbsp;to&nbsp;Yaf_Router&nbsp;route&nbsp;stack&nbsp;by&nbsp;calling&nbsp;addconfig<br />&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$config&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"name"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"type"&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"map"</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//Yaf_Route_Map&nbsp;route<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"controllerPrefer"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">FALSE</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"delimiter"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"#!"</span><span style="color: #007700">,&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yaf_Dispatcher</span><span style="color: #007700">::</span><span style="color: #0000BB">getInstance</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRouter</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">addConfig</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Config_Simple</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-yaf-route-map.construct-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><span class="methodname"><a href="yaf-router.addroute.php" class="methodname" rel="rdfs-seeAlso">Yaf_Router::addRoute()</a> - Add new Route into Router</span></li>
   <li class="member"><a href="class.yaf-route-static.php" class="classname">Yaf_Route_Static</a></li>
   <li class="member"><a href="class.yaf-route-supervar.php" class="classname">Yaf_Route_Supervar</a></li>
   <li class="member"><a href="class.yaf-route-simple.php" class="classname">Yaf_Route_Simple</a></li>
   <li class="member"><a href="class.yaf-route-regex.php" class="classname">Yaf_Route_Regex</a></li>
   <li class="member"><a href="class.yaf-route-rewrite.php" class="classname">Yaf_Route_Rewrite</a></li>
  </ul>                       
 </div>
  

</div><?php manual_footer(); ?>