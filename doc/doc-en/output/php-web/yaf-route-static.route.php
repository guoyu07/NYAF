<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-route-static.inc";
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
    0 => 'yaf-route-static.route.php',
    1 => 'Yaf_Route_Static::route',
  ),
  'up' => 
  array (
    0 => 'class.yaf-route-static.php',
    1 => 'Yaf_Route_Static',
  ),
  'prev' => 
  array (
    0 => 'yaf-route-static.match.php',
    1 => 'Yaf_Route_Static::match',
  ),
  'next' => 
  array (
    0 => 'class.yaf-route-supervar.php',
    1 => 'Yaf_Route_Supervar',
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
<div id="yaf-route-static.route" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Route_Static::route</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Route_Static::route</span> &mdash; <span class="dc-title">Route a request</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-route-static.route-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><strong>Yaf_Route_Static::route</strong></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-request-abstract.php" class="type Yaf_Request_Abstract">Yaf_Request_Abstract</a></span> <code class="parameter">$request</code></span>
   )</div>

  <p class="para rdfs-comment">

  </p>

  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
currently not documented; only its argument list is available.
</p></div>

 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-route-static.route-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">request</code></dt>

    <dd>

     <p class="para">
      
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-route-static.route-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   always be <strong><code>TRUE</code></strong>
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-yaf-route-static.route-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-85">
   <p><strong>Example #1 <span class="function"><strong>Yaf_Route_Static::route()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="shellcode"><pre class="shellcode">// assuming there is only one module defined:Index
Request: http://yourdomain.com/a/b
=&gt; module = index, controller=a, action=b

//assuming ap.action_prefer = On
Request: http://yourdomain.com/b
=&gt; module = default(index), controller = default(index), action = b

//assuming ap.action_prefer = Off
Request: http://yourdomain.com/b
=&gt; module = default(index), controller = b, action = default(index)


Request: http://yourdomain.com/a/b/foo/bar/test/a/id/4
=&gt; module = default(index), controller = a, action = b, request parameters: foo = bar, test = a, id = 4</pre>
</div>
   </div>

  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-yaf-route-static.route-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><span class="methodname"><a href="yaf-route-supervar.route.php" class="methodname" rel="rdfs-seeAlso">Yaf_Route_Supervar::route()</a> - The route purpose</span></li>
   <li class="member"><span class="methodname"><a href="yaf-route-simple.route.php" class="methodname" rel="rdfs-seeAlso">Yaf_Route_Simple::route()</a> - Route a request</span></li>
   <li class="member"><span class="methodname"><a href="yaf-route-regex.route.php" class="methodname" rel="rdfs-seeAlso">Yaf_Route_Regex::route()</a> - The route purpose</span></li>
   <li class="member"><span class="methodname"><a href="yaf-route-rewrite.route.php" class="methodname" rel="rdfs-seeAlso">Yaf_Route_Rewrite::route()</a> - The route purpose</span></li>
   <li class="member"><span class="methodname"><a href="yaf-route-map.route.php" class="methodname" rel="rdfs-seeAlso">Yaf_Route_Map::route()</a> - The route purpose</span></li>
  </ul>                       
 </div>
  


</div><?php manual_footer(); ?>