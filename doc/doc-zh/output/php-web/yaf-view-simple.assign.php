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
    0 => 'yaf-view-simple.assign.php',
    1 => 'Yaf_View_Simple::assign',
  ),
  'up' => 
  array (
    0 => 'class.yaf-view-simple.php',
    1 => 'Yaf_View_Simple',
  ),
  'prev' => 
  array (
    0 => 'class.yaf-view-simple.php',
    1 => 'Yaf_View_Simple',
  ),
  'next' => 
  array (
    0 => 'yaf-view-simple.assignref.php',
    1 => 'Yaf_View_Simple::assignRef',
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
<div id="yaf-view-simple.assign" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_View_Simple::assign</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_View_Simple::assign</span> &mdash; <span class="dc-title">Assign values</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-view-simple.assign-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><strong>Yaf_View_Simple::assign</strong></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   [, <span class="methodparam"><span class="type"><a href="language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>
  ] )</div>

  <p class="para rdfs-comment">
   assign variable to view engine
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-view-simple.assign-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">name</code></dt>

    <dd>

     <p class="para">
       A string or an array.
     </p>
     <p class="para">
       if is string, then the next argument $value is required. 
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


 <div class="refsect1 returnvalues" id="refsect1-yaf-view-simple.assign-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-yaf-view-simple.assign-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-37">
   <p><strong>Example #1 <span class="function"><strong>Yaf_View_Simple::assign()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">IndexController&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">Yaf_Controller_Abstract&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">indexAction</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getView</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">assign</span><span style="color: #007700">(</span><span style="color: #DD0000">"foo"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"bar"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_view</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">assign</span><span style="color: #007700">(&nbsp;array(&nbsp;</span><span style="color: #DD0000">"key"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"value"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"name"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"value"</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

  </div>
  <div class="example" id="example-38">
   <p><strong>Example #2 <span class="function"><strong>template()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
&lt;html&gt;<br />&nbsp;&lt;head&gt;<br />&nbsp;&nbsp;&lt;title&gt;<span style="color: #0000BB">&lt;?php&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$foo</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">?&gt;</span>&lt;/title&gt;<br />&nbsp;&lt;/head&gt;&nbsp;&nbsp;<br />&lt;body&gt;<br />&nbsp;&nbsp;<span style="color: #0000BB">&lt;?php&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">foreach&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_tpl_vars&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">value</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;$</span><span style="color: #0000BB">$name</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;or&nbsp;echo&nbsp;$this-&gt;_tpl_vars[$name];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}<br />&nbsp;&nbsp;</span><span style="color: #0000BB">?&gt;<br /></span>&lt;/body&gt;<br />&lt;/html&gt;</span>
</code></div>
   </div>

  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-yaf-view-simple.assign-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><span class="methodname"><a href="yaf-view-simple.assignref.php" class="methodname" rel="rdfs-seeAlso">Yaf_View_Simple::assignRef()</a> - The assignRef purpose</span></li>
   <li class="member"><span class="methodname"><strong>Yaf_View_Interface::clear()</strong></span></li>
   <li class="member"><span class="methodname"><a href="yaf-view-simple.set.php" class="methodname" rel="rdfs-seeAlso">Yaf_View_Simple::__set()</a> - Set value to engine</span></li>
  </ul>                       
 </div>
  

</div><?php manual_footer(); ?>