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
    0 => 'yaf-route-simple.assemble.php',
    1 => 'Yaf_Route_Simple::assemble',
  ),
  'up' => 
  array (
    0 => 'class.yaf-route-simple.php',
    1 => 'Yaf_Route_Simple',
  ),
  'prev' => 
  array (
    0 => 'class.yaf-route-simple.php',
    1 => 'Yaf_Route_Simple',
  ),
  'next' => 
  array (
    0 => 'yaf-route-simple.construct.php',
    1 => 'Yaf_Route_Simple::__construct',
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
<div id="yaf-route-simple.assemble" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Route_Simple::assemble</h1>
  <p class="verinfo">(Yaf &gt;=2.3.0)</p><p class="refpurpose"><span class="refname">Yaf_Route_Simple::assemble</span> &mdash; <span class="dc-title">Assemble a url</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-route-simple.assemble-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><strong>Yaf_Route_Simple::assemble</strong></span>
    ( <span class="methodparam"><span class="type">array</span> <code class="parameter">$info</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$query</code></span>
  ] )</div>

  <p class="para rdfs-comment">
   Assemble a url.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-route-simple.assemble-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">info</code></dt>

    <dd>

     <p class="para">
      
     </p>
    </dd>

   
   
    <dt>
<code class="parameter">query</code></dt>

    <dd>

     <p class="para">
      
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 examples" id="refsect1-yaf-route-simple.assemble-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-81">
   <p><strong>Example #1 <span class="function"><strong>Yaf_Route_Simple::assemble()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /><br />$router&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Router</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$route&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Route_Simple</span><span style="color: #007700">(</span><span style="color: #DD0000">'m'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'c'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'a'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$router</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addRoute</span><span style="color: #007700">(</span><span style="color: #DD0000">"simple"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$route</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$router</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRoute</span><span style="color: #007700">(</span><span style="color: #DD0000">'simple'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">assemble</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">':a'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'yafaction'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'tkey'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'tval'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">':c'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'yafcontroller'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">':m'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'yafmodule'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'tkey1'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'tval1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'tkey2'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'tval2'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;));</span>
</span>
</code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
string(64) &quot;?m=yafmodule&amp;c=yafcontroller&amp;a=yafaction&amp;tkey1=tval1&amp;tkey2=tval2&quot;
</pre></div>
   </div>
  </div>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-route-simple.assemble-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>


</div><?php manual_footer(); ?>