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
    0 => 'yaf-dispatcher.getapplication.php',
    1 => 'Yaf_Dispatcher::getApplication',
  ),
  'up' => 
  array (
    0 => 'class.yaf-dispatcher.php',
    1 => 'Yaf_Dispatcher',
  ),
  'prev' => 
  array (
    0 => 'yaf-dispatcher.flushinstantly.php',
    1 => 'Yaf_Dispatcher::flushInstantly',
  ),
  'next' => 
  array (
    0 => 'yaf-dispatcher.getinstance.php',
    1 => 'Yaf_Dispatcher::getInstance',
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
<div id="yaf-dispatcher.getapplication" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Dispatcher::getApplication</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Dispatcher::getApplication</span> &mdash; <span class="dc-title">Retrive the application</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-dispatcher.getapplication-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><a href="class.yaf-application.php" class="type Yaf_Application">Yaf_Application</a></span> <span class="methodname"><strong>Yaf_Dispatcher::getApplication</strong></span>
    ( <span class="methodparam">void</span>
   )</div>

  <p class="para rdfs-comment">
   Retrive the <a href="class.yaf-application.php" class="classname">Yaf_Application</a> instance. same as
   <span class="methodname"><a href="yaf-application.app.php" class="methodname">Yaf_Application::app()</a></span>.
  </p>



 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-dispatcher.getapplication-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-dispatcher.getapplication-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-yaf-dispatcher.getapplication-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><span class="methodname"><a href="yaf-application.app.php" class="methodname" rel="rdfs-seeAlso">Yaf_Application::app()</a> - Retrieve an Application instance</span></li>
  </ul>
 </div>


</div><?php manual_footer(); ?>