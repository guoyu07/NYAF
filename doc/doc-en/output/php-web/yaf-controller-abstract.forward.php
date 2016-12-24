<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-controller-abstract.inc";
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
    0 => 'yaf-controller-abstract.forward.php',
    1 => 'Yaf_Controller_Abstract::forward',
  ),
  'up' => 
  array (
    0 => 'class.yaf-controller-abstract.php',
    1 => 'Yaf_Controller_Abstract',
  ),
  'prev' => 
  array (
    0 => 'yaf-controller-abstract.display.php',
    1 => 'Yaf_Controller_Abstract::display',
  ),
  'next' => 
  array (
    0 => 'yaf-controller-abstract.getinvokearg.php',
    1 => 'Yaf_Controller_Abstract::getInvokeArg',
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
<div id="yaf-controller-abstract.forward" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Controller_Abstract::forward</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Controller_Abstract::forward</span> &mdash; <span class="dc-title">foward to another action</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-controller-abstract.forward-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>Yaf_Controller_Abstract::forward</strong></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$action</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$paramters</code></span>
  ] )</div>

  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>Yaf_Controller_Abstract::forward</strong></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$controller</code></span>
   , <span class="methodparam"><span class="type">string</span> <code class="parameter">$action</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$paramters</code></span>
  ] )</div>

  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>Yaf_Controller_Abstract::forward</strong></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$module</code></span>
   , <span class="methodparam"><span class="type">string</span> <code class="parameter">$controller</code></span>
   , <span class="methodparam"><span class="type">string</span> <code class="parameter">$action</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$paramters</code></span>
  ] )</div>

  <p class="para rdfs-comment">
   forward current execution process to other action.
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
      this method doesn&#039;t switch to the destination action immediately, it
      will take place after current flow finish.
    </p>
   </p></blockquote>
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-controller-abstract.forward-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">module</code></dt>

    <dd>

     <p class="para">
       destination module name, if NULL was given, then default module name
       is assumed
     </p>
    </dd>

   
   
    <dt>
<code class="parameter">controller</code></dt>

    <dd>

     <p class="para">
       destination controller name
     </p>
    </dd>

   
   
    <dt>
<code class="parameter">action</code></dt>

    <dd>

     <p class="para">
       destination action name
     </p>
    </dd>

   
   
    <dt>
<code class="parameter">paramters</code></dt>

    <dd>

     <p class="para">
      calling arguments
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 examples" id="refsect1-yaf-controller-abstract.forward-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-34">
   <p><strong>Example #1 <span class="function"><strong>Yaf_Controller_Abstract::forward()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">IndexController&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">Yaf_Controller_Abstract<br /></span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">indexAction</span><span style="color: #007700">(){&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$logined&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #DD0000">"login"</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$logined</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">forward</span><span style="color: #007700">(</span><span style="color: #DD0000">"login"</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">"from"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"Index"</span><span style="color: #007700">));&nbsp;</span><span style="color: #FF8000">//&nbsp;forward&nbsp;to&nbsp;login&nbsp;action<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">FALSE</span><span style="color: #007700">;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;this&nbsp;is&nbsp;important,&nbsp;this&nbsp;finish&nbsp;current&nbsp;working&nbsp;flow<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;and&nbsp;tell&nbsp;the&nbsp;Yaf&nbsp;do&nbsp;not&nbsp;doing&nbsp;auto-render<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;other&nbsp;processes<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">loginAction</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"login,&nbsp;redirected&nbsp;from&nbsp;"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getParam</span><span style="color: #007700">(</span><span style="color: #DD0000">"from"</span><span style="color: #007700">)&nbsp;,&nbsp;</span><span style="color: #DD0000">"&nbsp;action"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
   login, redirected from Index action
</pre></div>
   </div>
  </div>
 </div>



 <div class="refsect1 returnvalues" id="refsect1-yaf-controller-abstract.forward-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
    return FALSE on failure
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-yaf-controller-abstract.forward-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><span class="methodname"><strong>Yaf_Request_Abstrace::getParam()</strong></span></li>
  </ul>
 </div>


</div><?php manual_footer(); ?>