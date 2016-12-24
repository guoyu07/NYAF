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
    0 => 'yaf-dispatcher.setdefaultmodule.php',
    1 => 'Yaf_Dispatcher::setDefaultModule',
  ),
  'up' => 
  array (
    0 => 'class.yaf-dispatcher.php',
    1 => 'Yaf_Dispatcher',
  ),
  'prev' => 
  array (
    0 => 'yaf-dispatcher.setdefaultcontroller.php',
    1 => 'Yaf_Dispatcher::setDefaultController',
  ),
  'next' => 
  array (
    0 => 'yaf-dispatcher.seterrorhandler.php',
    1 => 'Yaf_Dispatcher::setErrorHandler',
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
<div id="yaf-dispatcher.setdefaultmodule" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Dispatcher::setDefaultModule</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Dispatcher::setDefaultModule</span> &mdash; <span class="dc-title">Change default module name</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-dispatcher.setdefaultmodule-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><a href="class.yaf-dispatcher.php" class="type Yaf_Dispatcher">Yaf_Dispatcher</a></span> <span class="methodname"><strong>Yaf_Dispatcher::setDefaultModule</strong></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$module</code></span>
   )</div>

  <p class="para rdfs-comment">

  </p>



 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-dispatcher.setdefaultmodule-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">module</code></dt>

    <dd>

     <p class="para">
      
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-dispatcher.setdefaultmodule-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>