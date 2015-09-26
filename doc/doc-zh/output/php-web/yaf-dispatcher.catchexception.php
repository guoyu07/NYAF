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
    0 => 'yaf-dispatcher.catchexception.php',
    1 => 'Yaf_Dispatcher::catchException',
  ),
  'up' => 
  array (
    0 => 'class.yaf-dispatcher.php',
    1 => 'Yaf_Dispatcher',
  ),
  'prev' => 
  array (
    0 => 'yaf-dispatcher.autorender.php',
    1 => 'Yaf_Dispatcher::autoRender',
  ),
  'next' => 
  array (
    0 => 'yaf-dispatcher.clone.php',
    1 => 'Yaf_Dispatcher::__clone',
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
<div id="yaf-dispatcher.catchexception" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Dispatcher::catchException</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Dispatcher::catchException</span> &mdash; <span class="dc-title">Switch on/off exception catching</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-dispatcher.catchexception-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><a href="class.yaf-dispatcher.php" class="type Yaf_Dispatcher">Yaf_Dispatcher</a></span> <span class="methodname"><strong>Yaf_Dispatcher::catchException</strong></span>
    ([ <span class="methodparam"><span class="type">bool</span> <code class="parameter">$flag</code></span>
  ] )</div>

  <p class="para rdfs-comment">
     While the application.dispatcher.throwException is On(you can also calling
     to <span class="methodname"><strong>Yaf_Dispatcher::throwException(TRUE)()</strong></span> to enable it),  Yaf will throw Exception whe
     error occurrs instead of trigger error. 
  </p>
  <p class="para">   
     then if you enable <span class="methodname"><strong>Yaf_Dispatcher::catchException()</strong></span>(also can enabled by set
     <a href="yaf.appconfig.php#configuration.yaf.dispatcher.catchexception" class="link">application.dispatcher.catchException</a>), 
     all uncaught Exceptions will be caught by ErrorController::error if you have defined one.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-dispatcher.catchexception-parameters">
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


 <div class="refsect1 returnvalues" id="refsect1-yaf-dispatcher.catchexception-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-yaf-dispatcher.catchexception-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-25">
   <p><strong>Example #1 <span class="function"><strong>Yaf_Dispatcher::catchException()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
/*&nbsp;if&nbsp;you&nbsp;defined&nbsp;a&nbsp;ErrorController&nbsp;like&nbsp;following&nbsp;*/<br /><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">ErrorController&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">Yaf_Controller_Abstract&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;you&nbsp;can&nbsp;also&nbsp;call&nbsp;to&nbsp;Yaf_Request_Abstract::getException&nbsp;to&nbsp;get&nbsp;the&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;un-caught&nbsp;exception.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">errorAction</span><span style="color: #007700">(</span><span style="color: #0000BB">$exception</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/*&nbsp;error&nbsp;occurs&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">switch&nbsp;(</span><span style="color: #0000BB">$exception</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCode</span><span style="color: #007700">())&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">YAF_ERR_NOTFOUND_MODULE</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">YAF_ERR_NOTFOUND_CONTROLLER</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">YAF_ERR_NOTFOUND_ACTION</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #0000BB">YAF_ERR_NOTFOUND_VIEW</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">404</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">":"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$exception</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default&nbsp;:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$exception</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">":"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$exception</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;<br />}<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
/* now if some error occur, assuming access a non-exists controller(or you can throw a exception yourself): */
404:Could not find controller script **/application/controllers/No-exists-controller.php
</pre></div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-yaf-dispatcher.catchexception-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><span class="methodname"><a href="yaf-dispatcher.throwexception.php" class="methodname" rel="rdfs-seeAlso">Yaf_Dispatcher::throwException()</a> - Switch on/off exception throwing</span></li>
   <li class="member"><span class="methodname"><a href="yaf-dispatcher.seterrorhandler.php" class="methodname" rel="rdfs-seeAlso">Yaf_Dispatcher::setErrorHandler()</a> - Set error handler</span></li>
  </ul>
 </div>


</div><?php manual_footer(); ?>