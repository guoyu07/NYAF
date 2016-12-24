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
    0 => 'yaf-application.app.php',
    1 => 'Yaf_Application::app',
  ),
  'up' => 
  array (
    0 => 'class.yaf-application.php',
    1 => 'Yaf_Application',
  ),
  'prev' => 
  array (
    0 => 'class.yaf-application.php',
    1 => 'Yaf_Application',
  ),
  'next' => 
  array (
    0 => 'yaf-application.bootstrap.php',
    1 => 'Yaf_Application::bootstrap',
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
<div id="yaf-application.app" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Application::app</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Application::app</span> &mdash; <span class="dc-title">Retrieve an Application instance</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-application.app-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="modifier">static</span> <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>Yaf_Application::app</strong></span>
    ( <span class="methodparam">void</span>
   )</div>

  <p class="para rdfs-comment">
    Retrieve the <a href="class.yaf-application.php" class="classname">Yaf_Application</a> instance.
    Alternatively, we also could use 
   <span class="methodname"><a href="yaf-dispatcher.getapplication.php" class="methodname">Yaf_Dispatcher::getApplication()</a></span>.
  </p>

 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-application.app-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-application.app-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   A Yaf_Application instance, if no Yaf_Application was initialized before,
   <strong><code>NULL</code></strong> will be returned.
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-yaf-application.app-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><span class="methodname"><a href="yaf-dispatcher.getapplication.php" class="methodname" rel="rdfs-seeAlso">Yaf_Dispatcher::getApplication()</a> - Retrive the application</span></li>
  </ul>
 </div>


</div><?php manual_footer(); ?>