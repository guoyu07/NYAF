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
    0 => 'yaf-view-simple.clear.php',
    1 => 'Yaf_View_Simple::clear',
  ),
  'up' => 
  array (
    0 => 'class.yaf-view-simple.php',
    1 => 'Yaf_View_Simple',
  ),
  'prev' => 
  array (
    0 => 'yaf-view-simple.assignref.php',
    1 => 'Yaf_View_Simple::assignRef',
  ),
  'next' => 
  array (
    0 => 'yaf-view-simple.construct.php',
    1 => 'Yaf_View_Simple::__construct',
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
<div id="yaf-view-simple.clear" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_View_Simple::clear</h1>
  <p class="verinfo">(Yaf &gt;=2.2.0)</p><p class="refpurpose"><span class="refname">Yaf_View_Simple::clear</span> &mdash; <span class="dc-title">Clear Assigned values</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-view-simple.clear-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><strong>Yaf_View_Simple::clear</strong></span>
    ([ <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
  ] )</div>

  <p class="para rdfs-comment">
   clear assigned variable
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-view-simple.clear-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">name</code></dt>

    <dd>

     <p class="para">
       assigned variable name
     </p>
     <p class="para">
      if empty, will clear all assigned variables
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-view-simple.clear-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-yaf-view-simple.clear-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-41">
   <p><strong>Example #1 <span class="function"><strong>Yaf_View_Simple::clear()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">IndexController&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">Yaf_Controller_Abstract&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">indexAction</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getView</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">clear</span><span style="color: #007700">(</span><span style="color: #DD0000">"foo"</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">clear</span><span style="color: #007700">(</span><span style="color: #DD0000">"bar"</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;clear&nbsp;"foo"&nbsp;and&nbsp;"bar"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_view</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clear</span><span style="color: #007700">();&nbsp;</span><span style="color: #FF8000">//clear&nbsp;all&nbsp;assigned&nbsp;variables<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-yaf-view-simple.clear-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><span class="methodname"><a href="yaf-view-simple.assignref.php" class="methodname" rel="rdfs-seeAlso">Yaf_View_Simple::assignRef()</a> - The assignRef purpose</span></li>
   <li class="member"><span class="methodname"><a href="yaf-view-interface.assign.php" class="methodname" rel="rdfs-seeAlso">Yaf_View_Interface::assign()</a> - Assign value to View engine</span></li>
   <li class="member"><span class="methodname"><a href="yaf-view-simple.set.php" class="methodname" rel="rdfs-seeAlso">Yaf_View_Simple::__set()</a> - Set value to engine</span></li>
  </ul>                       
 </div>
  

</div><?php manual_footer(); ?>