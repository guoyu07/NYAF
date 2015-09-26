<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/book.yaf.inc";
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
    0 => 'class.yaf-bootstrap-abstract.php',
    1 => 'Yaf_Bootstrap_Abstract',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'yaf-application.wakeup.php',
    1 => 'Yaf_Application::__wakeup',
  ),
  'next' => 
  array (
    0 => 'class.yaf-dispatcher.php',
    1 => 'Yaf_Dispatcher',
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
<div id="class.yaf-bootstrap-abstract" class="reference">

 <h1 class="title">The Yaf_Bootstrap_Abstract class</h1>
 

 <div class="partintro"><p class="verinfo">(No version information available, might only be in Git)</p>


  <div class="section" id="yaf-bootstrap-abstract.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
     Bootstrap is a mechanism used to do some intial config before a
     Application run.
   </p>
   <p class="para">
     User may define their own Bootstrap class by inheriting
     <strong class="classname">Yaf_Bootstrap_Abstract</strong>
   </p>
   <p class="para">
     Any method declared in Bootstrap class with leading &quot;_init&quot;, will be
     called by <span class="methodname"><a href="yaf-application.bootstrap.php" class="methodname">Yaf_Application::bootstrap()</a></span> one by one 
     according to their defined order. 
   </p>
  </div>


 <div class="section">
  <h2 class="title">Examples</h2>
  <div class="example" id="example-23">
   <p><strong>Example #1 Bootstrap example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/*&nbsp;bootstrap&nbsp;class&nbsp;should&nbsp;be&nbsp;defined&nbsp;under&nbsp;./application/Bootstrap.php&nbsp;*/<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">Bootstrap&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">Yaf_Bootstrap_Abstract&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">_initConfig</span><span style="color: #007700">(</span><span style="color: #0000BB">Yaf_Dispatcher&nbsp;$dispatcher</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">__METHOD__</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">_initPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">Yaf_Dispatcher&nbsp;$dispatcher</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">__METHOD__</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$config&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"application"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"directory"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"/application/"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;);<br />&nbsp;<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$app&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Application</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bootstrap</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
string(22) &quot;Bootstrap::_initConfig&quot;
string(22) &quot;Bootstrap::_initPlugin&quot;
</pre></div>
   </div>
  </div>
 </div>

  <div class="section" id="yaf-bootstrap-abstract.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <div class="ooclass"></div>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">abstract</span>
      <strong class="classname">Yaf_Bootstrap_Abstract</strong>
     </span>
     {</div>
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
   }</div>


  </div>

 </div>

</div>
<?php manual_footer(); ?>