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
    0 => 'yaf-dispatcher.setrequest.php',
    1 => 'Yaf_Dispatcher::setRequest',
  ),
  'up' => 
  array (
    0 => 'class.yaf-dispatcher.php',
    1 => 'Yaf_Dispatcher',
  ),
  'prev' => 
  array (
    0 => 'yaf-dispatcher.seterrorhandler.php',
    1 => 'Yaf_Dispatcher::setErrorHandler',
  ),
  'next' => 
  array (
    0 => 'yaf-dispatcher.setview.php',
    1 => 'Yaf_Dispatcher::setView',
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
<div id="yaf-dispatcher.setrequest" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Dispatcher::setRequest</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Dispatcher::setRequest</span> &mdash; <span class="dc-title">The setRequest purpose</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-dispatcher.setrequest-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><a href="class.yaf-dispatcher.php" class="type Yaf_Dispatcher">Yaf_Dispatcher</a></span> <span class="methodname"><strong>Yaf_Dispatcher::setRequest</strong></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-request-abstract.php" class="type Yaf_Request_Abstract">Yaf_Request_Abstract</a></span> <code class="parameter">$request</code></span>
   )</div>

  <p class="para rdfs-comment">

  </p>



 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-dispatcher.setrequest-parameters">
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


 <div class="refsect1 returnvalues" id="refsect1-yaf-dispatcher.setrequest-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>