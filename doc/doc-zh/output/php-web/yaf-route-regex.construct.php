<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-route-regex.inc";
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
    0 => 'yaf-route-regex.construct.php',
    1 => 'Yaf_Route_Regex::__construct',
  ),
  'up' => 
  array (
    0 => 'class.yaf-route-regex.php',
    1 => 'Yaf_Route_Regex',
  ),
  'prev' => 
  array (
    0 => 'yaf-route-regex.assemble.php',
    1 => 'Yaf_Route_Regex::assemble',
  ),
  'next' => 
  array (
    0 => 'yaf-route-regex.route.php',
    1 => 'Yaf_Route_Regex::route',
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
<div id="yaf-route-regex.construct" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Route_Regex::__construct</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Route_Regex::__construct</span> &mdash; <span class="dc-title">Yaf_Route_Regex constructor</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-route-regex.construct-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span><span class="methodname"><strong>Yaf_Route_Regex::__construct</strong></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$match</code></span>
   , <span class="methodparam"><span class="type">array</span> <code class="parameter">$route</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$map</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$verify</code></span>
   [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$reverse</code></span>
  ]]] )</div>

  <p class="para rdfs-comment">
  </p>

 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-route-regex.construct-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">match</code></dt>

    <dd>

     <p class="para">
       A complete Regex pattern, will be used to match a request uri, if
       doesn&#039;t matched, <a href="class.yaf-route-regex.php" class="classname">Yaf_Route_Regex</a> will return
       <strong><code>FALSE</code></strong>.
     </p>
    </dd>

   
   
    <dt>
<code class="parameter">route</code></dt>

    <dd>

     <p class="para">
      When the match pattern matches the request uri,
      <a href="class.yaf-route-regex.php" class="classname">Yaf_Route_Regex</a> will use this to decide which
      m/c/a to routed.
     </p>
     <p class="para">
      either of m/c/a in this array is optianl, if you don&#039;t assgian a
      specific value, it will be routed to default.
     </p>
    </dd>

   
   
    <dt>
<code class="parameter">map</code></dt>

    <dd>

     <p class="para">
      A array to assign name to the captrues in the match result.
     </p>
    </dd>

   
   
    <dt>
<code class="parameter">verify</code></dt>

    <dd>

     <p class="para">
      
     </p>
    </dd>

   
   
    <dt>
<code class="parameter">reverse</code></dt>

    <dd>

     <p class="para">
      a string, used to assemble url, see
      <span class="methodname"><a href="yaf-route-regex.assemble.php" class="methodname">Yaf_Route_Regex::assemble()</a></span>.
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
       this parameter is introduced in 2.3.0
       </p>
      </p></blockquote>
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-route-regex.construct-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-yaf-route-regex.construct-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-64">
   <p><strong>Example #1 <span class="function"><strong>Yaf_Route_Regex()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Add&nbsp;a&nbsp;regex&nbsp;route&nbsp;to&nbsp;Yaf_Router&nbsp;route&nbsp;stack<br />&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yaf_Dispatcher</span><span style="color: #007700">::</span><span style="color: #0000BB">getInstance</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRouter</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">addRoute</span><span style="color: #007700">(</span><span style="color: #DD0000">"name"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Route_Regex</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"#^/product/([^/]+)/([^/])+#"</span><span style="color: #007700">,&nbsp;</span><span style="color: #FF8000">//match&nbsp;request&nbsp;uri&nbsp;leading&nbsp;"/product"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'controller'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"product"</span><span style="color: #007700">,&nbsp;&nbsp;</span><span style="color: #FF8000">//route&nbsp;to&nbsp;product&nbsp;controller,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"name"</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;now&nbsp;you&nbsp;can&nbsp;call&nbsp;$request-&gt;getParam("name")<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">2&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"id"</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;to&nbsp;get&nbsp;the&nbsp;first&nbsp;captrue&nbsp;in&nbsp;the&nbsp;match&nbsp;pattern.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

  </div>
  <div class="example" id="example-65">
   <p><strong>Example #2 <span class="function"><strong>Yaf_Route_Regex(as of 2.3.0)()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Use&nbsp;match&nbsp;result&nbsp;as&nbsp;MVC&nbsp;name<br />&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yaf_Dispatcher</span><span style="color: #007700">::</span><span style="color: #0000BB">getInstance</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRouter</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">addRoute</span><span style="color: #007700">(</span><span style="color: #DD0000">"name"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Route_Regex</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"#^/product/([^/]+)/([^/])+#i"</span><span style="color: #007700">,&nbsp;</span><span style="color: #FF8000">//match&nbsp;request&nbsp;uri&nbsp;leading&nbsp;"/product"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'controller'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">":name"</span><span style="color: #007700">,&nbsp;</span><span style="color: #FF8000">//&nbsp;route&nbsp;to&nbsp;:name,&nbsp;which&nbsp;is&nbsp;$1&nbsp;in&nbsp;the&nbsp;match&nbsp;result&nbsp;as&nbsp;controller&nbsp;name<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"name"</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;now&nbsp;you&nbsp;can&nbsp;call&nbsp;$request-&gt;getParam("name")<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">2&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"id"</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;to&nbsp;get&nbsp;the&nbsp;first&nbsp;captrue&nbsp;in&nbsp;the&nbsp;match&nbsp;pattern.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

  </div>
  <div class="example" id="example-66">
   <p><strong>Example #3 <span class="function"><strong>Yaf_Route_Regex()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Add&nbsp;a&nbsp;regex&nbsp;route&nbsp;to&nbsp;Yaf_Router&nbsp;route&nbsp;stack&nbsp;by&nbsp;calling&nbsp;addconfig<br />&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$config&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"name"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"type"&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"regex"</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//Yaf_Route_Regex&nbsp;route<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"match"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"#(.*)#"</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//match&nbsp;arbitrary&nbsp;request&nbsp;uri<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"route"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'controller'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"product"</span><span style="color: #007700">,&nbsp;&nbsp;</span><span style="color: #FF8000">//route&nbsp;to&nbsp;product&nbsp;controller,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'action'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"dummy"</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//route&nbsp;to&nbsp;dummy&nbsp;action<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"map"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"uri"</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;now&nbsp;you&nbsp;can&nbsp;call&nbsp;$request-&gt;getParam("uri")<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yaf_Dispatcher</span><span style="color: #007700">::</span><span style="color: #0000BB">getInstance</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRouter</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">addConfig</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Config_Simple</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-yaf-route-regex.construct-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><span class="methodname"><a href="yaf-router.addroute.php" class="methodname" rel="rdfs-seeAlso">Yaf_Router::addRoute()</a> - Add new Route into Router</span></li>
   <li class="member"><span class="methodname"><a href="yaf-router.addconfig.php" class="methodname" rel="rdfs-seeAlso">Yaf_Router::addConfig()</a> - Add config-defined routes into Router</span></li>
   <li class="member"><a href="class.yaf-route-static.php" class="classname">Yaf_Route_Static</a></li>
   <li class="member"><a href="class.yaf-route-supervar.php" class="classname">Yaf_Route_Supervar</a></li>
   <li class="member"><a href="class.yaf-route-simple.php" class="classname">Yaf_Route_Simple</a></li>
   <li class="member"><a href="class.yaf-route-rewrite.php" class="classname">Yaf_Route_Rewrite</a></li>
   <li class="member"><a href="class.yaf-route-map.php" class="classname">Yaf_Route_Map</a></li>
  </ul>                       
 </div>
  

</div><?php manual_footer(); ?>