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
    0 => 'yaf-dispatcher.throwexception.php',
    1 => 'Yaf_Dispatcher::throwException',
  ),
  'up' => 
  array (
    0 => 'class.yaf-dispatcher.php',
    1 => 'Yaf_Dispatcher',
  ),
  'prev' => 
  array (
    0 => 'yaf-dispatcher.sleep.php',
    1 => 'Yaf_Dispatcher::__sleep',
  ),
  'next' => 
  array (
    0 => 'yaf-dispatcher.wakeup.php',
    1 => 'Yaf_Dispatcher::__wakeup',
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
<div id="yaf-dispatcher.throwexception" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Dispatcher::throwException</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Dispatcher::throwException</span> &mdash; <span class="dc-title">Switch on/off exception throwing</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-dispatcher.throwexception-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><a href="class.yaf-dispatcher.php" class="type Yaf_Dispatcher">Yaf_Dispatcher</a></span> <span class="methodname"><strong>Yaf_Dispatcher::throwException</strong></span>
    ([ <span class="methodparam"><span class="type">bool</span> <code class="parameter">$flag</code></span>
  ] )</div>

  <p class="para rdfs-comment">
   Siwtch on/off exception throwing while unexpected error occurring.
   When this is on, Yaf will throwing exceptions instead of triggering
   catchable errors. 
  </p>
  <p class="para">
   You can also use <a href="yaf.appconfig.php#configuration.yaf.dispatcher.throwexception" class="link">
    application.dispatcher.throwException</a> to achieve the 
   same purpose.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-dispatcher.throwexception-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">flag</code></dt>

    <dd>

     <p class="para">
       bool   
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-dispatcher.throwexception-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-yaf-dispatcher.throwexception-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-29">
   <p><strong>Example #1 <span class="function"><strong>Yaf_Dispatcher::throwexception()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /><br />$config&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'application'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'directory'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;),<br />);<br /></span><span style="color: #0000BB">$app&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Application</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDispatcher</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">throwException</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /><br />try&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">run</span><span style="color: #007700">();<br />}&nbsp;catch&nbsp;(</span><span style="color: #0000BB">Yaf_Exception&nbsp;$e</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">());<br />}<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
string(59) &quot;Could not find controller script /tmp/controllers/Index.php&quot;
</pre></div>
   </div>
  </div>
  <div class="example" id="example-30">
   <p><strong>Example #2 <span class="function"><strong>Yaf_Dispatcher::throwexception()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /><br />$config&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'application'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'directory'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;),<br />);<br /></span><span style="color: #0000BB">$app&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Application</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDispatcher</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">throwException</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">run</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
PHP Catchable fatal error:  Yaf_Application::run(): Could not find controller script /tmp/controllers/Index.php in /tmp/1.php on line 12
</pre></div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-yaf-dispatcher.throwexception-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><span class="methodname"><a href="yaf-dispatcher.catchexception.php" class="methodname" rel="rdfs-seeAlso">Yaf_Dispatcher::catchException()</a> - Switch on/off exception catching</span></li>
   <li class="member"><a href="class.yaf-exception.php" class="classname">Yaf_Exception</a></li>
  </ul>
 </div>


</div><?php manual_footer(); ?>