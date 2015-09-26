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
    0 => 'yaf-dispatcher.disableview.php',
    1 => 'Yaf_Dispatcher::disableView',
  ),
  'up' => 
  array (
    0 => 'class.yaf-dispatcher.php',
    1 => 'Yaf_Dispatcher',
  ),
  'prev' => 
  array (
    0 => 'yaf-dispatcher.construct.php',
    1 => 'Yaf_Dispatcher::__construct',
  ),
  'next' => 
  array (
    0 => 'yaf-dispatcher.dispatch.php',
    1 => 'Yaf_Dispatcher::dispatch',
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
<div id="yaf-dispatcher.disableview" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Dispatcher::disableView</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Dispatcher::disableView</span> &mdash; <span class="dc-title">Disable view rendering</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-dispatcher.disableview-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><strong>Yaf_Dispatcher::disableView</strong></span>
    ( <span class="methodparam">void</span>
   )</div>

  <p class="para rdfs-comment">
    disable view engine, used in some app that user will output by theirself
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
     you can simply return <strong><code>FALSE</code></strong> in a action to prevent the auto-rendering of
     that action
    </p>
    </p></blockquote>
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-dispatcher.disableview-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-dispatcher.disableview-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>