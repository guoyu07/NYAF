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
    0 => 'yaf-dispatcher.seterrorhandler.php',
    1 => 'Yaf_Dispatcher::setErrorHandler',
  ),
  'up' => 
  array (
    0 => 'class.yaf-dispatcher.php',
    1 => 'Yaf_Dispatcher',
  ),
  'prev' => 
  array (
    0 => 'yaf-dispatcher.setdefaultmodule.php',
    1 => 'Yaf_Dispatcher::setDefaultModule',
  ),
  'next' => 
  array (
    0 => 'yaf-dispatcher.setrequest.php',
    1 => 'Yaf_Dispatcher::setRequest',
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
<div id="yaf-dispatcher.seterrorhandler" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Dispatcher::setErrorHandler</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Dispatcher::setErrorHandler</span> &mdash; <span class="dc-title">Set error handler</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-dispatcher.seterrorhandler-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><a href="class.yaf-dispatcher.php" class="type Yaf_Dispatcher">Yaf_Dispatcher</a></span> <span class="methodname"><strong>Yaf_Dispatcher::setErrorHandler</strong></span>
    ( <span class="methodparam"><span class="type"><span class="type call">call</span></span> <code class="parameter">$callback</code></span>
   , <span class="methodparam"><span class="type">int</span> <code class="parameter">$error_types</code></span>
   )</div>

  <p class="para rdfs-comment">
    Set error handler for Yaf. when <a href="yaf.appconfig.php#configuration.yaf.dispatcher.throwexception" class="link">application.dispatcher.throwException</a>
    is off, Yaf will trigger catchable error while unexpected errors occrred.
  </p>
  <p class="para">
   Thus, this error handler will be called while the error raise.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-dispatcher.seterrorhandler-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">callback</code></dt>

    <dd>

     <p class="para">
      A callable callback
     </p>
    </dd>

   
   
    <dt>
<code class="parameter">error_types</code></dt>

    <dd>

     <p class="para">
      
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-dispatcher.seterrorhandler-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-yaf-dispatcher.seterrorhandler-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><span class="methodname"><a href="yaf-dispatcher.throwexception.php" class="methodname" rel="rdfs-seeAlso">Yaf_Dispatcher::throwException()</a> - Switch on/off exception throwing</span></li>
   <li class="member"><span class="methodname"><a href="yaf-application.getlasterrorno.php" class="methodname" rel="rdfs-seeAlso">Yaf_Application::getLastErrorNo()</a> - Get code of last occurred error</span></li>
   <li class="member"><span class="methodname"><a href="yaf-application.getlasterrormsg.php" class="methodname" rel="rdfs-seeAlso">Yaf_Application::getLastErrorMsg()</a> - Get message of the last occurred error</span></li>
  </ul>
 </div>


</div><?php manual_footer(); ?>