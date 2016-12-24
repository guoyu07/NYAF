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
    0 => 'yaf-dispatcher.dispatch.php',
    1 => 'Yaf_Dispatcher::dispatch',
  ),
  'up' => 
  array (
    0 => 'class.yaf-dispatcher.php',
    1 => 'Yaf_Dispatcher',
  ),
  'prev' => 
  array (
    0 => 'yaf-dispatcher.disableview.php',
    1 => 'Yaf_Dispatcher::disableView',
  ),
  'next' => 
  array (
    0 => 'yaf-dispatcher.enableview.php',
    1 => 'Yaf_Dispatcher::enableView',
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
<div id="yaf-dispatcher.dispatch" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Dispatcher::dispatch</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Dispatcher::dispatch</span> &mdash; <span class="dc-title">Dispatch a request</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-dispatcher.dispatch-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><a href="class.yaf-response-abstract.php" class="type Yaf_Response_Abstract">Yaf_Response_Abstract</a></span> <span class="methodname"><strong>Yaf_Dispatcher::dispatch</strong></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-request-abstract.php" class="type Yaf_Request_Abstract">Yaf_Request_Abstract</a></span> <code class="parameter">$request</code></span>
   )</div>

  <p class="para rdfs-comment">
   This method does the heavy work of the
   <a href="class.yaf-dispatcher.php" class="classname">Yaf_Dispatcher</a>. It take a request object.
  </p>
  <p class="para">
   The dispatch process has three distinct events:
  <ul class="simplelist">
   <li class="member">Routing</li>
   <li class="member">Dispatching</li>
   <li class="member">Response</li>
  </ul>
   Routing takes place exactly once, using the values in the request object
   when dispatch() is called. Dispatching takes place in a loop; a request may
   either indicate multiple actions to dispatch, or the controller or a plugin
   may reset the request object to force additional actions to dispatch(see
   <a href="class.yaf-plugin-abstract.php" class="classname">Yaf_Plugin_Abstract</a>. When all is done, the 
   <a href="class.yaf-dispatcher.php" class="classname">Yaf_Dispatcher</a> returns a response.
  </p>



 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-dispatcher.dispatch-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">request</code></dt>

    <dd>

     <p class="para">
      
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-dispatcher.dispatch-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
  </p>
 </div>



</div><?php manual_footer(); ?>