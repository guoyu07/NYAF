<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-route-supervar.inc";
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
    0 => 'yaf-route-supervar.construct.php',
    1 => 'Yaf_Route_Supervar::__construct',
  ),
  'up' => 
  array (
    0 => 'class.yaf-route-supervar.php',
    1 => 'Yaf_Route_Supervar',
  ),
  'prev' => 
  array (
    0 => 'yaf-route-supervar.assemble.php',
    1 => 'Yaf_Route_Supervar::assemble',
  ),
  'next' => 
  array (
    0 => 'yaf-route-supervar.route.php',
    1 => 'Yaf_Route_Supervar::route',
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
<div id="yaf-route-supervar.construct" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Route_Supervar::__construct</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Route_Supervar::__construct</span> &mdash; <span class="dc-title">The __construct purpose</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-route-supervar.construct-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span><span class="methodname"><strong>Yaf_Route_Supervar::__construct</strong></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$supervar_name</code></span>
   )</div>

  <p class="para rdfs-comment">
   <a href="class.yaf-route-supervar.php" class="classname">Yaf_Route_Supervar</a> is similar with
   <a href="class.yaf-route-static.php" class="classname">Yaf_Route_Static</a>, the difference is
   <a href="class.yaf-route-supervar.php" class="classname">Yaf_Route_Supervar</a> will look for path info in query
   string, and the parameter <var class="varname"><var class="varname">supervar_name</var></var> is the key.
  </p>

  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
currently not documented; only its argument list is available.
</p></div>

 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-route-supervar.construct-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">supervar_name</code></dt>

    <dd>

     <p class="para">
      The name of key.
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-route-supervar.construct-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-yaf-route-supervar.construct-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-87">
   <p><strong>Example #1 <span class="function"><strong>Yaf_Route_Supervar()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Add&nbsp;a&nbsp;supervar&nbsp;route&nbsp;to&nbsp;Yaf_Router&nbsp;route&nbsp;stack<br />&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yaf_Dispatcher</span><span style="color: #007700">::</span><span style="color: #0000BB">getInstance</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRouter</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">addRoute</span><span style="color: #007700">(</span><span style="color: #DD0000">"name"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Route_Supervar</span><span style="color: #007700">(</span><span style="color: #DD0000">"r"</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
/** for request: http://yourdomain.com/xx/oo/?r=/ctr/act/var/value
  * will result in following:
  */
  array (
    &quot;module&quot;   =&gt; index(default),
    &quot;controller&quot; =&gt; ctr,
    &quot;action&quot;     =&gt; act,
    &quot;params&quot;     =&gt; array(
          &quot;var&quot; =&gt; value,
     )
  )
</pre></div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-yaf-route-supervar.construct-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><span class="methodname"><a href="yaf-router.addroute.php" class="methodname" rel="rdfs-seeAlso">Yaf_Router::addRoute()</a> - Add new Route into Router</span></li>
   <li class="member"><span class="methodname"><a href="yaf-router.addconfig.php" class="methodname" rel="rdfs-seeAlso">Yaf_Router::addConfig()</a> - Add config-defined routes into Router</span></li>
   <li class="member"><a href="class.yaf-route-static.php" class="classname">Yaf_Route_Static</a></li>
   <li class="member"><a href="class.yaf-route-regex.php" class="classname">Yaf_Route_Regex</a></li>
   <li class="member"><a href="class.yaf-route-simple.php" class="classname">Yaf_Route_Simple</a></li>
   <li class="member"><a href="class.yaf-route-rewrite.php" class="classname">Yaf_Route_Rewrite</a></li>
   <li class="member"><a href="class.yaf-route-map.php" class="classname">Yaf_Route_Map</a></li>
  </ul>                       
 </div>
  

</div><?php manual_footer(); ?>