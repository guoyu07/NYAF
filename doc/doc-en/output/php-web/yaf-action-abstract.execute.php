<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-action-abstract.inc";
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
    0 => 'yaf-action-abstract.execute.php',
    1 => 'Yaf_Action_Abstract::execute',
  ),
  'up' => 
  array (
    0 => 'class.yaf-action-abstract.php',
    1 => 'Yaf_Action_Abstract',
  ),
  'prev' => 
  array (
    0 => 'class.yaf-action-abstract.php',
    1 => 'Yaf_Action_Abstract',
  ),
  'next' => 
  array (
    0 => 'yaf-action-abstract.getcontroller.php',
    1 => 'Yaf_Action_Abstract::getController',
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
<div id="yaf-action-abstract.execute" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Action_Abstract::execute</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Action_Abstract::execute</span> &mdash; <span class="dc-title">Action entry point</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-action-abstract.execute-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">abstract</span> <span class="modifier">public</span><span class="type"><a href="language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>Yaf_Action_Abstract::execute</strong></span>
    ([ <span class="methodparam"><span class="type"><a href="language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$arg</code></span>
   [, <span class="methodparam"><span class="type"><a href="language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$...</code></span>
  ]] )</div>

  <p class="para rdfs-comment">
   user should always define this method for a action, this is the entry point
   of an action.
   <span class="methodname"><strong>Yaf_Action_Abstract::execute()</strong></span> may have agruments.
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     The value retrived from the request is not safe. you should do some
     filtering work before you use it.
    </p>
   </p></blockquote>
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-action-abstract.execute-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-action-abstract.execute-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-yaf-action-abstract.execute-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-35">
   <p><strong>Example #1 <span class="function"><strong>Yaf_Action_Abstract::execute()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/**&nbsp;<br />&nbsp;*&nbsp;A&nbsp;controller&nbsp;example<br />&nbsp;*/<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">ProductController&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">Yaf_Controller_Abstract&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;protected&nbsp;</span><span style="color: #0000BB">$actions&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"index"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"actions/Index.php"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />}<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

  </div>
  <div class="example" id="example-36">
   <p><strong>Example #2 <span class="function"><strong>Yaf_Action_Abstract::execute()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/**&nbsp;<br />&nbsp;*&nbsp;ListAction<br />&nbsp;*/<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">ListAction&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">Yaf_Action_Abstract&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">execute&nbsp;</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">assert</span><span style="color: #007700">(</span><span style="color: #0000BB">$name&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getParam</span><span style="color: #007700">(</span><span style="color: #DD0000">"name"</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">assert</span><span style="color: #007700">(</span><span style="color: #0000BB">$id&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getParam</span><span style="color: #007700">(</span><span style="color: #DD0000">"id"</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />}<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
/**
 * Now assuming we are using the Yaf_Route_Static route 
 * for request: http://yourdomain/product/list/name/yaf/id/22
 * will result:
 */
 bool(true)
 bool(true)
</pre></div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-yaf-action-abstract.execute-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"/>
  </ul>
 </div>


</div><?php manual_footer(); ?>