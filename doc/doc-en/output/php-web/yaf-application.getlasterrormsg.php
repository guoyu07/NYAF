<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-application.inc";
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
    0 => 'yaf-application.getlasterrormsg.php',
    1 => 'Yaf_Application::getLastErrorMsg',
  ),
  'up' => 
  array (
    0 => 'class.yaf-application.php',
    1 => 'Yaf_Application',
  ),
  'prev' => 
  array (
    0 => 'yaf-application.getdispatcher.php',
    1 => 'Yaf_Application::getDispatcher',
  ),
  'next' => 
  array (
    0 => 'yaf-application.getlasterrorno.php',
    1 => 'Yaf_Application::getLastErrorNo',
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
<div id="yaf-application.getlasterrormsg" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Application::getLastErrorMsg</h1>
  <p class="verinfo">(Yaf &gt;=2.1.2)</p><p class="refpurpose"><span class="refname">Yaf_Application::getLastErrorMsg</span> &mdash; <span class="dc-title">Get message of the last occurred error</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-application.getlasterrormsg-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><strong>Yaf_Application::getLastErrorMsg</strong></span>
    ( <span class="methodparam">void</span>
   )</div>

  <p class="para rdfs-comment">

  </p>



 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-application.getlasterrormsg-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-application.getlasterrormsg-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-yaf-application.getlasterrormsg-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-20">
   <p><strong>Example #1 <span class="function"><strong>Yaf_Application::getLastErrorMsg()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">error_handler</span><span style="color: #007700">(</span><span style="color: #0000BB">$errno</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$errstr</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$errfile</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$errline</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">Yaf_Application</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getLastErrorMsg</span><span style="color: #007700">());<br />}<br /><br /></span><span style="color: #0000BB">$config&nbsp;</span><span style="color: #007700">=&nbsp;array(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;</span><span style="color: #DD0000">"application"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"directory"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"/tmp/notexists"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"dispatcher"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"throwException"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #FF8000">//trigger&nbsp;error&nbsp;instead&nbsp;of&nbsp;throw&nbsp;exception&nbsp;when&nbsp;error&nbsp;occure<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">),<br />&nbsp;&nbsp;),<br />);<br /><br /></span><span style="color: #0000BB">$app&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Application</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDispatcher</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">setErrorHandler</span><span style="color: #007700">(</span><span style="color: #DD0000">"error_handler"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">E_RECOVERABLE_ERROR</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">run</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
string(69) &quot;Could not find controller script /tmp/notexists/controllers/Index.php&quot;
</pre></div>
   </div>
  </div>
 </div>


</div><?php manual_footer(); ?>