<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-view-simple.inc";
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
    0 => 'yaf-view-simple.assignref.php',
    1 => 'Yaf_View_Simple::assignRef',
  ),
  'up' => 
  array (
    0 => 'class.yaf-view-simple.php',
    1 => 'Yaf_View_Simple',
  ),
  'prev' => 
  array (
    0 => 'yaf-view-simple.assign.php',
    1 => 'Yaf_View_Simple::assign',
  ),
  'next' => 
  array (
    0 => 'yaf-view-simple.clear.php',
    1 => 'Yaf_View_Simple::clear',
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
<div id="yaf-view-simple.assignref" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_View_Simple::assignRef</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_View_Simple::assignRef</span> &mdash; <span class="dc-title">The assignRef purpose</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-view-simple.assignref-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><strong>Yaf_View_Simple::assignRef</strong></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   , <span class="methodparam"><span class="type"><a href="language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter reference">&$value</code></span>
   )</div>

  <p class="para rdfs-comment">
    unlike <span class="methodname"><a href="yaf-view-simple.assign.php" class="methodname">Yaf_View_Simple::assign()</a></span>, this method
    assign a ref value to engine.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-view-simple.assignref-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">name</code></dt>

    <dd>

     <p class="para">
       A string name which will be used to access the value in the tempalte.
     </p>
    </dd>

   
   
    <dt>
<code class="parameter">value</code></dt>

    <dd>

     <p class="para">
      mixed value
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-view-simple.assignref-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-yaf-view-simple.assignref-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-39">
   <p><strong>Example #1 <span class="function"><strong>Yaf_View_Simple::assignRef()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">IndexController&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">Yaf_Controller_Abstract&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">indexAction</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"bar"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getView</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">assign</span><span style="color: #007700">(</span><span style="color: #DD0000">"foo"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/*&nbsp;plz&nbsp;note&nbsp;that&nbsp;there&nbsp;was&nbsp;a&nbsp;bug&nbsp;before&nbsp;Yaf&nbsp;2.1.4,&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;which&nbsp;make&nbsp;following&nbsp;output&nbsp;"bar";<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dummy&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getView</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">(</span><span style="color: #DD0000">"index/index.phtml"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//prevent&nbsp;the&nbsp;auto-render<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yaf_Dispatcher</span><span style="color: #007700">::</span><span style="color: #0000BB">getInstance</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">autoRender</span><span style="color: #007700">(</span><span style="color: #0000BB">FALSE</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

  </div>
  <div class="example" id="example-40">
   <p><strong>Example #2 <span class="function"><strong>template()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
&lt;html&gt;<br />&nbsp;&lt;head&gt;<br />&nbsp;&nbsp;&lt;title&gt;<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$foo</span><span style="color: #007700">;&nbsp;&nbsp;</span><span style="color: #0000BB">$foo&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"changed"</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">?&gt;</span>&lt;/title&gt;<br />&nbsp;&lt;/head&gt;&nbsp;&nbsp;<br />&lt;body&gt;<br />&lt;/body&gt;<br />&lt;/html&gt;</span>
</code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
/* access the index controller will result: */
changed
</pre></div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-yaf-view-simple.assignref-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><span class="methodname"><a href="yaf-view-simple.assign.php" class="methodname" rel="rdfs-seeAlso">Yaf_View_Simple::assign()</a> - Assign values</span></li>
   <li class="member"><span class="methodname"><a href="yaf-view-simple.set.php" class="methodname" rel="rdfs-seeAlso">Yaf_View_Simple::__set()</a> - Set value to engine</span></li>
  </ul>                       
 </div>
  

</div><?php manual_footer(); ?>