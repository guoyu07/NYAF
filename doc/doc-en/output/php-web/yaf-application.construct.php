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
    0 => 'yaf-application.construct.php',
    1 => 'Yaf_Application::__construct',
  ),
  'up' => 
  array (
    0 => 'class.yaf-application.php',
    1 => 'Yaf_Application',
  ),
  'prev' => 
  array (
    0 => 'yaf-application.clone.php',
    1 => 'Yaf_Application::__clone',
  ),
  'next' => 
  array (
    0 => 'yaf-application.destruct.php',
    1 => 'Yaf_Application::__destruct',
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
<div id="yaf-application.construct" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Application::__construct</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Application::__construct</span> &mdash; <span class="dc-title">Yaf_Application constructor</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-application.construct-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span><span class="methodname"><strong>Yaf_Application::__construct</strong></span>
    ( <span class="methodparam"><span class="type"><a href="language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$config</code></span>
   [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$envrion</code></span>
  ] )</div>

  <p class="para rdfs-comment">
   Instance a <a href="class.yaf-application.php" class="classname">Yaf_Application</a>.
  </p>



 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-application.construct-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">config</code></dt>

    <dd>

     <p class="para">
       A ini config file path, or a config array
     </p>
     <p class="para">
       If is a ini config file, there should be a section named as the one
       defined by <a href="yaf.configuration.php#ini.yaf.environ" class="link">yaf.environ</a>, which
       is &quot;product&quot; by default.
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        If you use a ini configuration file as your applicatioin&#039;s config
        container. you would open the <a href="yaf.configuration.php#ini.yaf.cache-config" class="link">yaf.cache_config</a> to improve
        performance.
       </p>
      </p></blockquote>
     </p>
     <p class="para">
       And the config entry(and there default value) list blow:
      <div class="example" id="example-13">
       <p><strong>Example #1 A ini config file example</strong></p>
       <div class="example-contents">
<div class="inicode"><pre class="inicode">[product]
;this one should alway be defined, and have no default value
application.directory=APPLICATION_PATH

;following configs have default value, you may no need to define them
application.library = APPLICATION_PATH . &quot;/library&quot;
application.dispatcher.throwException=1
application.dispatcher.catchException=1

application.baseUri=&quot;&quot;

;the php script ext name
ap.ext=php

;the view template ext name
ap.view.ext=phtml

ap.dispatcher.defaultModuel=Index
ap.dispatcher.defaultController=Index
ap.dispatcher.defaultAction=index

;defined modules
ap.modules=Index</pre>
</div>
       </div>

      </div>
     </p>
    </dd>

   
   
    <dt>
<code class="parameter">envrion</code></dt>

    <dd>

     <p class="para">
      Which section will be loaded as the final config
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-application.construct-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-yaf-application.construct-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-14">
   <p><strong>Example #2 <span class="function"><strong>Yaf_Application::__construct()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />defined</span><span style="color: #007700">(</span><span style="color: #DD0000">'APPLICATION_PATH'</span><span style="color: #007700">)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;APPLICATION_PATH&nbsp;will&nbsp;be&nbsp;used&nbsp;in&nbsp;the&nbsp;ini&nbsp;config&nbsp;file<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'APPLICATION_PATH'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">__DIR__</span><span style="color: #007700">));&nbsp;</span><span style="color: #FF8000">//__DIR__&nbsp;was&nbsp;introduced&nbsp;after&nbsp;PHP&nbsp;5.3<br /><br /></span><span style="color: #0000BB">$application&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Application</span><span style="color: #007700">(</span><span style="color: #0000BB">APPLICATION_PATH</span><span style="color: #007700">.</span><span style="color: #DD0000">'/conf/application.ini'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$application</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bootstrap</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">run</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span>
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
  <div class="example" id="example-15">
   <p><strong>Example #3 <span class="function"><strong>Yaf_Application::__construct()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$config&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"application"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"directory"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">))&nbsp;.&nbsp;</span><span style="color: #DD0000">"/application"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;),<br />);<br /><br /></span><span style="color: #FF8000">/**&nbsp;Yaf_Application&nbsp;*/<br /></span><span style="color: #0000BB">$application&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Application</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$application</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bootstrap</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">run</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span>
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


 <div class="refsect1 seealso" id="refsect1-yaf-application.construct-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><a href="class.yaf-config-ini.php" class="classname">Yaf_Config_Ini</a></li>
  </ul>
 </div>


</div><?php manual_footer(); ?>