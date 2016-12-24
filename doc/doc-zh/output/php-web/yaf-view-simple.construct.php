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
    0 => 'yaf-view-simple.construct.php',
    1 => 'Yaf_View_Simple::__construct',
  ),
  'up' => 
  array (
    0 => 'class.yaf-view-simple.php',
    1 => 'Yaf_View_Simple',
  ),
  'prev' => 
  array (
    0 => 'yaf-view-simple.clear.php',
    1 => 'Yaf_View_Simple::clear',
  ),
  'next' => 
  array (
    0 => 'yaf-view-simple.display.php',
    1 => 'Yaf_View_Simple::display',
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
<div id="yaf-view-simple.construct" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_View_Simple::__construct</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_View_Simple::__construct</span> &mdash; <span class="dc-title">Constructor of Yaf_View_Simple</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-view-simple.construct-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><strong>Yaf_View_Simple::__construct</strong></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$template_dir</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$options</code></span>
  ] )</div>

  <p class="para rdfs-comment">

  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-view-simple.construct-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">template_dir</code></dt>

    <dd>

     <p class="para">
      The base directory of the templates,  by default, 
      it is APPLICATOIN . &quot;/views&quot; for Yaf.
     </p>
    </dd>

   
   
    <dt>
<code class="parameter">options</code></dt>

    <dd>

     <p class="para">
      <div class="parameterscode"><pre class="parameterscode">Options for the engine, as of Yaf 2.1.13, you can use short tag
      &quot;&lt;?=$var?&gt;&quot; in your template(regardless of &quot;short_open_tag&quot;), 
      so comes a option named &quot;short_tag&quot;,  you can switch this off 
      to prevent use short_tag in template.</pre>
</div>
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 examples" id="refsect1-yaf-view-simple.construct-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-42">
   <p><strong>Example #1 <span class="function"><strong>Yaf_View_Simple::__constructor()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />&nbsp;&nbsp;&nbsp;define&nbsp;</span><span style="color: #007700">(</span><span style="color: #DD0000">"TEMPLATE_DIRECTORY"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">APPLICATOIN_PATH&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'/views'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$view&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_View_Simple</span><span style="color: #007700">(</span><span style="color: #0000BB">TEMPLATE_DIRECTORY</span><span style="color: #007700">,&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'short_tag'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #FF8000">//doesn't&nbsp;allow&nbsp;use&nbsp;short&nbsp;tag&nbsp;in&nbsp;template<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

  </div>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-view-simple.construct-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>