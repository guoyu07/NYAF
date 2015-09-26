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
    0 => 'yaf-application.bootstrap.php',
    1 => 'Yaf_Application::bootstrap',
  ),
  'up' => 
  array (
    0 => 'class.yaf-application.php',
    1 => 'Yaf_Application',
  ),
  'prev' => 
  array (
    0 => 'yaf-application.app.php',
    1 => 'Yaf_Application::app',
  ),
  'next' => 
  array (
    0 => 'yaf-application.clearlasterror.php',
    1 => 'Yaf_Application::clearLastError',
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
<div id="yaf-application.bootstrap" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Application::bootstrap</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Application::bootstrap</span> &mdash; <span class="dc-title">Call bootstrap</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-application.bootstrap-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>Yaf_Application::bootstrap</strong></span>
    ([ <span class="methodparam"><span class="type"><a href="class.yaf-bootstrap-abstract.php" class="type Yaf_Bootstrap_Abstract">Yaf_Bootstrap_Abstract</a></span> <code class="parameter">$bootstrap</code></span>
  ] )</div>

  <p class="para rdfs-comment">
    Run a Bootstrap, all the methods defined in the Bootstrap and named with
    prefix &quot;_init&quot; will be called according to their declaration order, if the parameter bootstrap is not supplied, Yaf will look
    for a Bootstrap under application.directory.
  </p>

 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-application.bootstrap-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">bootstrap</code></dt>

    <dd>

     <p class="para">
      A <a href="class.yaf-bootstrap-abstract.php" class="classname">Yaf_Bootstrap_Abstract</a> instance      
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-application.bootstrap-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   <a href="class.yaf-application.php" class="classname">Yaf_Application</a> instance
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-yaf-application.bootstrap-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-10">
   <p><strong>Example #1 <span class="function"><strong>A Bootstrap()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/**<br />&nbsp;*&nbsp;This&nbsp;file&nbsp;should&nbsp;be&nbsp;under&nbsp;the&nbsp;APPLICATION_PATH&nbsp;.&nbsp;"/application/"(which&nbsp;was&nbsp;defined&nbsp;in&nbsp;the&nbsp;config&nbsp;passed&nbsp;to&nbsp;Yaf_Application).<br />&nbsp;*&nbsp;and&nbsp;named&nbsp;Bootstrap.php,&nbsp;&nbsp;so&nbsp;the&nbsp;Yaf_Application&nbsp;can&nbsp;find&nbsp;it&nbsp;<br />&nbsp;*/<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">Bootstrap&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">Yaf_Bootstrap_Abstract&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;function&nbsp;</span><span style="color: #0000BB">_initConfig</span><span style="color: #007700">(</span><span style="color: #0000BB">Yaf_Dispatcher&nbsp;$dispatcher</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"1st&nbsp;called\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;function&nbsp;</span><span style="color: #0000BB">_initPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">$dispatcher</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"2nd&nbsp;called\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

  </div>
  <div class="example" id="example-11">
   <p><strong>Example #2 <span class="function"><strong>Yaf_Application::bootstrap()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /><br />defined</span><span style="color: #007700">(</span><span style="color: #DD0000">'APPLICATION_PATH'</span><span style="color: #007700">)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;APPLICATION_PATH&nbsp;will&nbsp;be&nbsp;used&nbsp;in&nbsp;the&nbsp;ini&nbsp;config&nbsp;file<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'APPLICATION_PATH'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">__DIR__</span><span style="color: #007700">));&nbsp;</span><span style="color: #FF8000">//__DIR__&nbsp;was&nbsp;introduced&nbsp;after&nbsp;PHP&nbsp;5.3<br /><br /></span><span style="color: #0000BB">$application&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Application</span><span style="color: #007700">(</span><span style="color: #0000BB">APPLICATION_PATH</span><span style="color: #007700">.</span><span style="color: #DD0000">'/conf/application.ini'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$application</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bootstrap</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
1st called
2nd called
</pre></div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-yaf-application.bootstrap-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><a href="class.yaf-bootstrap-abstract.php" class="classname">Yaf_Bootstrap_Abstract</a></li>
  </ul>
 </div>


</div><?php manual_footer(); ?>