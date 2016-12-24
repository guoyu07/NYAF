<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-dispatcher.inc";
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
    0 => 'yaf-dispatcher.autorender.php',
    1 => 'Yaf_Dispatcher::autoRender',
  ),
  'up' => 
  array (
    0 => 'class.yaf-dispatcher.php',
    1 => 'Yaf_Dispatcher',
  ),
  'prev' => 
  array (
    0 => 'class.yaf-dispatcher.php',
    1 => 'Yaf_Dispatcher',
  ),
  'next' => 
  array (
    0 => 'yaf-dispatcher.catchexception.php',
    1 => 'Yaf_Dispatcher::catchException',
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
<div id="yaf-dispatcher.autorender" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Dispatcher::autoRender</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Dispatcher::autoRender</span> &mdash; <span class="dc-title">Switch on/off autorendering</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-dispatcher.autorender-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><a href="class.yaf-dispatcher.php" class="type Yaf_Dispatcher">Yaf_Dispatcher</a></span> <span class="methodname"><strong>Yaf_Dispatcher::autoRender</strong></span>
    ([ <span class="methodparam"><span class="type">bool</span> <code class="parameter">$flag</code></span>
  ] )</div>

  <p class="para rdfs-comment">
   <a href="class.yaf-dispatcher.php" class="classname">Yaf_Dispatcher</a> will render automatically after 
   dispatches a incoming request, you can prevent the rendering by calling
   this method with <code class="parameter">flag</code> <strong><code>TRUE</code></strong>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
     you can simply return <strong><code>FALSE</code></strong> in a action to prevent the auto-rendering of
     that action
    </p>
   </p></blockquote>
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-dispatcher.autorender-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">flag</code></dt>

    <dd>

     <p class="para">
      bool
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        since 2.2.0, if this parameter is not given, then the current state
        will be renturned
       </p>
      </p></blockquote>
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-dispatcher.autorender-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-yaf-dispatcher.autorender-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-24">
   <p><strong>Example #1 <span class="function"><strong>Yaf_Dispatcher::autoRender()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">IndexController&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">Yaf_Controller_Abstract&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/*&nbsp;init&nbsp;method&nbsp;will&nbsp;be&nbsp;called&nbsp;as&nbsp;soon&nbsp;as&nbsp;a&nbsp;controller&nbsp;is&nbsp;initialized&nbsp;*/&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">isXmlHttpRequest</span><span style="color: #007700">())&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//do&nbsp;not&nbsp;call&nbsp;render&nbsp;for&nbsp;ajax&nbsp;request<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//we&nbsp;will&nbsp;outpu&nbsp;a&nbsp;json&nbsp;string<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yaf_Dispatcher</span><span style="color: #007700">::</span><span style="color: #0000BB">getInstance</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">autoRender</span><span style="color: #007700">(</span><span style="color: #0000BB">FALSE</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;<br /><br />}<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
</pre></div>
   </div>
  </div>
 </div>


</div><?php manual_footer(); ?>