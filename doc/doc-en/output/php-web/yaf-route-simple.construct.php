<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-route-simple.inc";
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
    0 => 'yaf-route-simple.construct.php',
    1 => 'Yaf_Route_Simple::__construct',
  ),
  'up' => 
  array (
    0 => 'class.yaf-route-simple.php',
    1 => 'Yaf_Route_Simple',
  ),
  'prev' => 
  array (
    0 => 'yaf-route-simple.assemble.php',
    1 => 'Yaf_Route_Simple::assemble',
  ),
  'next' => 
  array (
    0 => 'yaf-route-simple.route.php',
    1 => 'Yaf_Route_Simple::route',
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
<div id="yaf-route-simple.construct" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Route_Simple::__construct</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Route_Simple::__construct</span> &mdash; <span class="dc-title">Yaf_Route_Simple constructor</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-route-simple.construct-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span><span class="methodname"><strong>Yaf_Route_Simple::__construct</strong></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$module_name</code></span>
   , <span class="methodparam"><span class="type">string</span> <code class="parameter">$controller_name</code></span>
   , <span class="methodparam"><span class="type">string</span> <code class="parameter">$action_name</code></span>
   )</div>

  <p class="para rdfs-comment">
   <a href="class.yaf-route-simple.php" class="classname">Yaf_Route_Simple</a> will get route info from query
   string. and the parameters of this constructor will used as keys while searching for the
   route info in $_GET.
  </p>

  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
currently not documented; only its argument list is available.
</p></div>

 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-route-simple.construct-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">module_name</code></dt>

    <dd>

     <p class="para">
       The key name of the module info. 
     </p>
    </dd>

   
   
    <dt>
<code class="parameter">controller_name</code></dt>

    <dd>

     <p class="para">
      the key name of the controller info.
     </p>
    </dd>

   
   
    <dt>
<code class="parameter">action_name</code></dt>

    <dd>

     <p class="para">
      the key name of the action info.
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-route-simple.construct-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Always return <strong><code>TRUE</code></strong>.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-yaf-route-simple.construct-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-82">
   <p><strong>Example #1 <span class="function"><a href="yaf-route-simple.route.php" class="function">Yaf_Route_Simple::route()</a></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />&nbsp;&nbsp;&nbsp;$route&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Route_Simple</span><span style="color: #007700">(</span><span style="color: #DD0000">"m"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"controller"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"act"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yaf_Router</span><span style="color: #007700">::</span><span style="color: #0000BB">getInstance</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">addRoute</span><span style="color: #007700">(</span><span style="color: #DD0000">"simple"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$route</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

  </div>
  <div class="example" id="example-83">
   <p><strong>Example #2 <span class="function"><a href="yaf-route-simple.route.php" class="function">Yaf_Route_Simple::route()</a></span>example</strong></p>
   <div class="example-contents">
<div class="bashcode"><pre class="bashcode">Request: http://yourdomain.com/path/?controller=a&amp;act=b
=&gt; module = default(index), controller = a, action = b

Request: http://yourdomain.com/path
=&gt; module = default(index), controller = default(index), action = default(index)</pre>
</div>
   </div>

  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-yaf-route-simple.construct-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><span class="methodname"><a href="yaf-route-supervar.route.php" class="methodname" rel="rdfs-seeAlso">Yaf_Route_Supervar::route()</a> - The route purpose</span></li>
   <li class="member"><span class="methodname"><a href="yaf-route-static.route.php" class="methodname" rel="rdfs-seeAlso">Yaf_Route_Static::route()</a> - Route a request</span></li>
   <li class="member"><span class="methodname"><a href="yaf-route-regex.route.php" class="methodname" rel="rdfs-seeAlso">Yaf_Route_Regex::route()</a> - The route purpose</span></li>
   <li class="member"><span class="methodname"><a href="yaf-route-rewrite.route.php" class="methodname" rel="rdfs-seeAlso">Yaf_Route_Rewrite::route()</a> - The route purpose</span></li>
   <li class="member"><span class="methodname"><a href="yaf-route-map.route.php" class="methodname" rel="rdfs-seeAlso">Yaf_Route_Map::route()</a> - The route purpose</span></li>
  </ul>                       
 </div>
  

</div><?php manual_footer(); ?>