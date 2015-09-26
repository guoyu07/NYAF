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
    0 => 'yaf-application.setappdirectory.php',
    1 => 'Yaf_Application::setAppDirectory',
  ),
  'up' => 
  array (
    0 => 'class.yaf-application.php',
    1 => 'Yaf_Application',
  ),
  'prev' => 
  array (
    0 => 'yaf-application.run.php',
    1 => 'Yaf_Application::run',
  ),
  'next' => 
  array (
    0 => 'yaf-application.sleep.php',
    1 => 'Yaf_Application::__sleep',
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
<div id="yaf-application.setappdirectory" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Application::setAppDirectory</h1>
  <p class="verinfo">(Yaf &gt;=2.1.4)</p><p class="refpurpose"><span class="refname">Yaf_Application::setAppDirectory</span> &mdash; <span class="dc-title">Change the application directory</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-application.setappdirectory-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><a href="class.yaf-application.php" class="type Yaf_Application">Yaf_Application</a></span> <span class="methodname"><strong>Yaf_Application::setAppDirectory</strong></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$directory</code></span>
   )</div>

  <p class="para rdfs-comment">

  </p>



 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-application.setappdirectory-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">directory</code></dt>

    <dd>

     <p class="para">
      
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-application.setappdirectory-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>