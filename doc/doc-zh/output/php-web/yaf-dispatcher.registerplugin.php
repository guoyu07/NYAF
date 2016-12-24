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
    0 => 'yaf-dispatcher.registerplugin.php',
    1 => 'Yaf_Dispatcher::registerPlugin',
  ),
  'up' => 
  array (
    0 => 'class.yaf-dispatcher.php',
    1 => 'Yaf_Dispatcher',
  ),
  'prev' => 
  array (
    0 => 'yaf-dispatcher.initview.php',
    1 => 'Yaf_Dispatcher::initView',
  ),
  'next' => 
  array (
    0 => 'yaf-dispatcher.returnresponse.php',
    1 => 'Yaf_Dispatcher::returnResponse',
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
<div id="yaf-dispatcher.registerplugin" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Dispatcher::registerPlugin</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Dispatcher::registerPlugin</span> &mdash; <span class="dc-title">Register a plugin</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-dispatcher.registerplugin-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><a href="class.yaf-dispatcher.php" class="type Yaf_Dispatcher">Yaf_Dispatcher</a></span> <span class="methodname"><strong>Yaf_Dispatcher::registerPlugin</strong></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-plugin-abstract.php" class="type Yaf_Plugin_Abstract">Yaf_Plugin_Abstract</a></span> <code class="parameter">$plugin</code></span>
   )</div>

  <p class="para rdfs-comment">
   Register a plugin(see <a href="class.yaf-plugin-abstract.php" class="classname">Yaf_Plugin_Abstract</a>).
   Generally, we register plugins in Bootstrap(see
   <a href="class.yaf-bootstrap-abstract.php" class="classname">Yaf_Bootstrap_Abstract</a>).
  </p>



 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-dispatcher.registerplugin-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">plugin</code></dt>

    <dd>

     <p class="para">
      
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-dispatcher.registerplugin-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-yaf-dispatcher.registerplugin-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-26">
   <p><strong>Example #1 <span class="function"><strong>Yaf_Dispatcher::registerPlugin()</strong></span>example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">Bootstrap&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">Yaf_Bootstrap_Abstract&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">_initPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">Yaf_Dispatcher&nbsp;$dispatcher</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;Yaf&nbsp;assumes&nbsp;plugin&nbsp;scripts&nbsp;under&nbsp;[application.directory]&nbsp;.&nbsp;&nbsp;"/plugins"&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;for&nbsp;this&nbsp;case,&nbsp;it&nbsp;will&nbsp;be:<br />&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;[application.directory]&nbsp;.&nbsp;"/plugins/"&nbsp;.&nbsp;"User"&nbsp;.&nbsp;[application.ext]<br />&nbsp;&nbsp;&nbsp;&nbsp;*/&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$user&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">UserPlugin</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dispatcher</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerPlugin</span><span style="color: #007700">(</span><span style="color: #0000BB">$user</span><span style="color: #007700">);<br />&nbsp;&nbsp;}<br />}<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
</code></div>
   </div>

  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-yaf-dispatcher.registerplugin-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><a href="class.yaf-plugin-abstract.php" class="classname">Yaf_Plugin_Abstract</a></li>
  </ul>
  <ul class="simplelist">
   <li class="member"><a href="class.yaf-bootstrap-abstract.php" class="classname">Yaf_Bootstrap_Abstract</a></li>
  </ul>
 </div>


</div><?php manual_footer(); ?>