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
    0 => 'yaf-dispatcher.initview.php',
    1 => 'Yaf_Dispatcher::initView',
  ),
  'up' => 
  array (
    0 => 'class.yaf-dispatcher.php',
    1 => 'Yaf_Dispatcher',
  ),
  'prev' => 
  array (
    0 => 'yaf-dispatcher.getrouter.php',
    1 => 'Yaf_Dispatcher::getRouter',
  ),
  'next' => 
  array (
    0 => 'yaf-dispatcher.registerplugin.php',
    1 => 'Yaf_Dispatcher::registerPlugin',
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
<div id="yaf-dispatcher.initview" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Dispatcher::initView</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Dispatcher::initView</span> &mdash; <span class="dc-title">Initialize view and return it</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-dispatcher.initview-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><a href="class.yaf-view-interface.php" class="type Yaf_View_Interface">Yaf_View_Interface</a></span> <span class="methodname"><strong>Yaf_Dispatcher::initView</strong></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$templates_dir</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$options</code></span>
  ] )</div>

  <p class="para rdfs-comment">

  </p>



 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-dispatcher.initview-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">templates_dir</code></dt>

    <dd>

     <p class="para">
      
     </p>
    </dd>

   
   
    <dt>
<code class="parameter">options</code></dt>

    <dd>

     <p class="para">
      
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-dispatcher.initview-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>