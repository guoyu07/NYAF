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
    0 => 'class.yaf-plugin-abstract.php',
    1 => 'Yaf_Plugin_Abstract',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'yaf-loader.wakeup.php',
    1 => 'Yaf_Loader::__wakeup',
  ),
  'next' => 
  array (
    0 => 'yaf-plugin-abstract.dispatchloopshutdown.php',
    1 => 'Yaf_Plugin_Abstract::dispatchLoopShutdown',
  ),
  'alternatives' => 
  array (
  ),
  'extra_header_links' => 
  array (
    'rel' => 'alternate',
    'href' => '/manual/en/feeds/class.yaf-plugin-abstract.atom',
    'type' => 'application/atom+xml',
  ),
);
$setup["toc"] = $TOC;
$setup["parents"] = $PARENTS;
manual_setup($setup);

manual_header();
?>
<div id="class.yaf-plugin-abstract" class="reference">

 <h1 class="title">The Yaf_Plugin_Abstract class</h1>
 

 <div class="partintro"><p class="verinfo">(Yaf &gt;=1.0.0)</p>


  <div class="section" id="yaf-plugin-abstract.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
     Plugins allow for easy extensibility and customization of the framework.
   </p>
   <p class="para">
    Plugins are classes. The actual class definition will vary based on the
    component -- you may need to implement this interface, but the fact 
    remains that the plugin is itself a class.
   </p>
   <p class="para">
     A plugin could be loaded into Yaf by using
     <span class="methodname"><a href="yaf-dispatcher.registerplugin.php" class="methodname">Yaf_Dispatcher::registerPlugin()</a></span>,  after
     registerd, All the methods which the plugin implemented according to this
     interface, will be called at the proper time.
   </p>
  </div>


 <div class="section">
  <h2 class="title">Examples</h2>
  <div class="example" id="example-52">
   <p><strong>Example #1 Plugin example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/*&nbsp;bootstrap&nbsp;class&nbsp;should&nbsp;be&nbsp;defined&nbsp;under&nbsp;./application/Bootstrap.php&nbsp;*/<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">Bootstrap&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">Yaf_Bootstrap_Abstract&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">_initPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">Yaf_Dispatcher&nbsp;$dispatcher</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/*&nbsp;register&nbsp;a&nbsp;plugin&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dispatcher</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPlugin</span><span style="color: #007700">(new&nbsp;</span><span style="color: #0000BB">TestPlugin</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/*&nbsp;plugin&nbsp;class&nbsp;should&nbsp;be&nbsp;placed&nbsp;under&nbsp;./application/plugins/&nbsp;*/<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">TestPlugin&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">Yaf_Plugin_Abstract&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">routerStartup</span><span style="color: #007700">(</span><span style="color: #0000BB">Yaf_Request_Abstract&nbsp;$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Yaf_Response_Abstract&nbsp;$response</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/*&nbsp;before&nbsp;router&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in&nbsp;this&nbsp;hook,&nbsp;&nbsp;user&nbsp;can&nbsp;do&nbsp;some&nbsp;url&nbsp;rewrite&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #DD0000">"routerStartup"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">routerShutdown</span><span style="color: #007700">(</span><span style="color: #0000BB">Yaf_Request_Abstract&nbsp;$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Yaf_Response_Abstract&nbsp;$response</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/*&nbsp;router&nbsp;complete&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in&nbsp;this&nbsp;hook,&nbsp;user&nbsp;can&nbsp;do&nbsp;login&nbsp;check&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #DD0000">"routerShutdown"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">dispatchLoopStartup</span><span style="color: #007700">(</span><span style="color: #0000BB">Yaf_Request_Abstract&nbsp;$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Yaf_Response_Abstract&nbsp;$response</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #DD0000">"dispatchLoopStartup"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">preDispatch</span><span style="color: #007700">(</span><span style="color: #0000BB">Yaf_Request_Abstract&nbsp;$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Yaf_Response_Abstract&nbsp;$response</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #DD0000">"preDispatch"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">postDispatch</span><span style="color: #007700">(</span><span style="color: #0000BB">Yaf_Request_Abstract&nbsp;$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Yaf_Response_Abstract&nbsp;$response</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #DD0000">"postDispatch"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">dispatchLoopShutdown</span><span style="color: #007700">(</span><span style="color: #0000BB">Yaf_Request_Abstract&nbsp;$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Yaf_Response_Abstract&nbsp;$response</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/*&nbsp;final&nbsp;hoook<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in&nbsp;this&nbsp;hook&nbsp;user&nbsp;can&nbsp;do&nbsp;loging&nbsp;or&nbsp;implement&nbsp;layout&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #DD0000">"dispatchLoopShutdown"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;Class&nbsp;</span><span style="color: #0000BB">IndexController&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">Yaf_Controller_Abstract&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">indexAction</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">FALSE</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//prevent&nbsp;rendering<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}<br />&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$config&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"application"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">"directory"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"/application/"</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;);<br />&nbsp;<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$app&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Yaf_Application</span><span style="color: #007700">(</span><span style="color: #0000BB">$config</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$app</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bootstrap</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">run</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
string(13) &quot;routerStartup&quot;
string(14) &quot;routerShutdown&quot;
string(19) &quot;dispatchLoopStartup&quot;
string(11) &quot;preDispatch&quot;
string(12) &quot;postDispatch&quot;
string(20) &quot;dispatchLoopShutdown&quot;
</pre></div>
   </div>
  </div>
 </div>


  <div class="section" id="yaf-plugin-abstract.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <div class="ooclass"></div>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <strong class="classname">Yaf_Plugin_Abstract</strong>
     </span>
     {</div>

    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-plugin-abstract.dispatchloopshutdown.php" class="methodname">dispatchLoopShutdown</a></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-request-abstract.php" class="type Yaf_Request_Abstract">Yaf_Request_Abstract</a></span> <code class="parameter">$request</code></span>
   , <span class="methodparam"><span class="type"><a href="class.yaf-response-abstract.php" class="type Yaf_Response_Abstract">Yaf_Response_Abstract</a></span> <code class="parameter">$response</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-plugin-abstract.dispatchloopstartup.php" class="methodname">dispatchLoopStartup</a></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-request-abstract.php" class="type Yaf_Request_Abstract">Yaf_Request_Abstract</a></span> <code class="parameter">$request</code></span>
   , <span class="methodparam"><span class="type"><a href="class.yaf-response-abstract.php" class="type Yaf_Response_Abstract">Yaf_Response_Abstract</a></span> <code class="parameter">$response</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-plugin-abstract.postdispatch.php" class="methodname">postDispatch</a></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-request-abstract.php" class="type Yaf_Request_Abstract">Yaf_Request_Abstract</a></span> <code class="parameter">$request</code></span>
   , <span class="methodparam"><span class="type"><a href="class.yaf-response-abstract.php" class="type Yaf_Response_Abstract">Yaf_Response_Abstract</a></span> <code class="parameter">$response</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-plugin-abstract.predispatch.php" class="methodname">preDispatch</a></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-request-abstract.php" class="type Yaf_Request_Abstract">Yaf_Request_Abstract</a></span> <code class="parameter">$request</code></span>
   , <span class="methodparam"><span class="type"><a href="class.yaf-response-abstract.php" class="type Yaf_Response_Abstract">Yaf_Response_Abstract</a></span> <code class="parameter">$response</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-plugin-abstract.preresponse.php" class="methodname">preResponse</a></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-request-abstract.php" class="type Yaf_Request_Abstract">Yaf_Request_Abstract</a></span> <code class="parameter">$request</code></span>
   , <span class="methodparam"><span class="type"><a href="class.yaf-response-abstract.php" class="type Yaf_Response_Abstract">Yaf_Response_Abstract</a></span> <code class="parameter">$response</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-plugin-abstract.routershutdown.php" class="methodname">routerShutdown</a></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-request-abstract.php" class="type Yaf_Request_Abstract">Yaf_Request_Abstract</a></span> <code class="parameter">$request</code></span>
   , <span class="methodparam"><span class="type"><a href="class.yaf-response-abstract.php" class="type Yaf_Response_Abstract">Yaf_Response_Abstract</a></span> <code class="parameter">$response</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-plugin-abstract.routerstartup.php" class="methodname">routerStartup</a></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-request-abstract.php" class="type Yaf_Request_Abstract">Yaf_Request_Abstract</a></span> <code class="parameter">$request</code></span>
   , <span class="methodparam"><span class="type"><a href="class.yaf-response-abstract.php" class="type Yaf_Response_Abstract">Yaf_Response_Abstract</a></span> <code class="parameter">$response</code></span>
   )</div>

   }</div>


  </div>

 </div>

 


















































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="yaf-plugin-abstract.dispatchloopshutdown.php">Yaf_Plugin_Abstract::dispatchLoopShutdown</a> — The dispatchLoopShutdown purpose</li><li><a href="yaf-plugin-abstract.dispatchloopstartup.php">Yaf_Plugin_Abstract::dispatchLoopStartup</a> — The dispatchLoopStartup purpose</li><li><a href="yaf-plugin-abstract.postdispatch.php">Yaf_Plugin_Abstract::postDispatch</a> — The postDispatch purpose</li><li><a href="yaf-plugin-abstract.predispatch.php">Yaf_Plugin_Abstract::preDispatch</a> — The preDispatch purpose</li><li><a href="yaf-plugin-abstract.preresponse.php">Yaf_Plugin_Abstract::preResponse</a> — The preResponse purpose</li><li><a href="yaf-plugin-abstract.routershutdown.php">Yaf_Plugin_Abstract::routerShutdown</a> — The routerShutdown purpose</li><li><a href="yaf-plugin-abstract.routerstartup.php">Yaf_Plugin_Abstract::routerStartup</a> — RouterStartup hook</li></ul>
</div>
<?php manual_footer(); ?>