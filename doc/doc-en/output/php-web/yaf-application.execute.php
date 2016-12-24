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
    0 => 'yaf-application.execute.php',
    1 => 'Yaf_Application::execute',
  ),
  'up' => 
  array (
    0 => 'class.yaf-application.php',
    1 => 'Yaf_Application',
  ),
  'prev' => 
  array (
    0 => 'yaf-application.environ.php',
    1 => 'Yaf_Application::environ',
  ),
  'next' => 
  array (
    0 => 'yaf-application.getappdirectory.php',
    1 => 'Yaf_Application::getAppDirectory',
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
<div id="yaf-application.execute" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Application::execute</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Application::execute</span> &mdash; <span class="dc-title">Execute a callback</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-application.execute-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>Yaf_Application::execute</strong></span>
    ( <span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$entry</code></span>
   , <span class="methodparam"><span class="type">string</span> <code class="parameter">$...</code></span>
   )</div>

  <p class="para rdfs-comment">
   This method is typically used to run Yaf_Application in a crontab work.
   Make the crontab work can also use the autoloader and Bootstrap mechanism.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-application.execute-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">entry</code></dt>

    <dd>

     <p class="para">
       a valid callback  
     </p>
    </dd>

   
   
    <dt>
<code class="parameter">...</code></dt>

    <dd>

     <p class="para">
      parameters will pass to the callback
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-application.execute-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-yaf-application.execute-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-17">
   <p><strong>Example #1 <span class="function"><strong>Yaf_Application::execute()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">main</span><span style="color: #007700">(</span><span style="color: #0000BB">$argc</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$argv</span><span style="color: #007700">)&nbsp;{<br />}<br /><br /></span><span style="color: #0000BB">$config&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"application"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"directory"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">))&nbsp;.&nbsp;</span><span style="color: #DD0000">"/application"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;),<br />);<br /><br /></span><span style="color: #FF8000">/**&nbsp;Yaf_Application&nbsp;*/<br /></span><span style="color: #0000BB">$application&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Application</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$application</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">(</span><span style="color: #DD0000">"main"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$argc</span><span style="color: #007700">,&nbsp;&nbsp;</span><span style="color: #0000BB">$argv</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span>
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