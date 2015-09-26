<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-plugin-abstract.inc";
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
    0 => 'yaf-plugin-abstract.routershutdown.php',
    1 => 'Yaf_Plugin_Abstract::routerShutdown',
  ),
  'up' => 
  array (
    0 => 'class.yaf-plugin-abstract.php',
    1 => 'Yaf_Plugin_Abstract',
  ),
  'prev' => 
  array (
    0 => 'yaf-plugin-abstract.preresponse.php',
    1 => 'Yaf_Plugin_Abstract::preResponse',
  ),
  'next' => 
  array (
    0 => 'yaf-plugin-abstract.routerstartup.php',
    1 => 'Yaf_Plugin_Abstract::routerStartup',
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
<div id="yaf-plugin-abstract.routershutdown" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Plugin_Abstract::routerShutdown</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Plugin_Abstract::routerShutdown</span> &mdash; <span class="dc-title">The routerShutdown purpose</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-plugin-abstract.routershutdown-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>Yaf_Plugin_Abstract::routerShutdown</strong></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-request-abstract.php" class="type Yaf_Request_Abstract">Yaf_Request_Abstract</a></span> <code class="parameter">$request</code></span>
   , <span class="methodparam"><span class="type"><a href="class.yaf-response-abstract.php" class="type Yaf_Response_Abstract">Yaf_Response_Abstract</a></span> <code class="parameter">$response</code></span>
   )</div>

  <p class="para rdfs-comment">
    This hook will be trigged after the route process finished, this hook
    is usually used for login check.
  </p>

  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
currently not documented; only its argument list is available.
</p></div>

 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-plugin-abstract.routershutdown-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">request</code></dt>

    <dd>

     <p class="para">
      
     </p>
    </dd>

   
   
    <dt>
<code class="parameter">response</code></dt>

    <dd>

     <p class="para">
      
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-plugin-abstract.routershutdown-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-yaf-plugin-abstract.routershutdown-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-53">
   <p><strong>Example #1 <span class="function"><strong>Yaf_Plugin_Abstract::routerShutdown()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">UserInitPlugin&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">Yaf_Plugin_Abstract&nbsp;</span><span style="color: #007700">{<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">routerShutdown</span><span style="color: #007700">(</span><span style="color: #0000BB">Yaf_Request_Abstract&nbsp;$request</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">Yaf_Response_Abstract&nbsp;$response</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$controller&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getControllerName</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Use&nbsp;access&nbsp;controller&nbsp;is&nbsp;unecessary&nbsp;for&nbsp;APIs<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$controller</span><span style="color: #007700">),&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'api'</span><span style="color: #007700">,&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">TRUE</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">Yaf_Session</span><span style="color: #007700">::</span><span style="color: #0000BB">getInstance</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">has</span><span style="color: #007700">(</span><span style="color: #DD0000">"login"</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">TRUE</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/*&nbsp;Use&nbsp;access&nbsp;check&nbsp;failed,&nbsp;need&nbsp;to&nbsp;login&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">redirect</span><span style="color: #007700">(</span><span style="color: #DD0000">"http://yourdomain.com/login/"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">FALSE</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-yaf-plugin-abstract.routershutdown-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><span class="methodname"><a href="yaf-plugin-abstract.routerstartup.php" class="methodname" rel="rdfs-seeAlso">Yaf_Plugin_Abstract::routerStartup()</a> - RouterStartup hook</span></li>
   <li class="member"><span class="methodname"><a href="yaf-plugin-abstract.dispatchloopstartup.php" class="methodname" rel="rdfs-seeAlso">Yaf_Plugin_Abstract::dispatchLoopStartup()</a> - The dispatchLoopStartup purpose</span></li>
   <li class="member"><span class="methodname"><a href="yaf-plugin-abstract.predispatch.php" class="methodname" rel="rdfs-seeAlso">Yaf_Plugin_Abstract::preDispatch()</a> - The preDispatch purpose</span></li>
   <li class="member"><span class="methodname"><a href="yaf-plugin-abstract.postdispatch.php" class="methodname" rel="rdfs-seeAlso">Yaf_Plugin_Abstract::postDispatch()</a> - The postDispatch purpose</span></li>
   <li class="member"><span class="methodname"><a href="yaf-plugin-abstract.dispatchloopshutdown.php" class="methodname" rel="rdfs-seeAlso">Yaf_Plugin_Abstract::dispatchLoopShutdown()</a> - The dispatchLoopShutdown purpose</span></li>
  </ul>
 </div>


</div><?php manual_footer(); ?>