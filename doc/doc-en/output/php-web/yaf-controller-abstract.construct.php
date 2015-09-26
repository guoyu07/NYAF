<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-controller-abstract.inc";
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
    0 => 'yaf-controller-abstract.construct.php',
    1 => 'Yaf_Controller_Abstract::__construct',
  ),
  'up' => 
  array (
    0 => 'class.yaf-controller-abstract.php',
    1 => 'Yaf_Controller_Abstract',
  ),
  'prev' => 
  array (
    0 => 'yaf-controller-abstract.clone.php',
    1 => 'Yaf_Controller_Abstract::__clone',
  ),
  'next' => 
  array (
    0 => 'yaf-controller-abstract.display.php',
    1 => 'Yaf_Controller_Abstract::display',
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
<div id="yaf-controller-abstract.construct" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Controller_Abstract::__construct</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Controller_Abstract::__construct</span> &mdash; <span class="dc-title">Yaf_Controller_Abstract constructor</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-controller-abstract.construct-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">final</span> <span class="modifier">private</span> <span class="methodname"><strong>Yaf_Controller_Abstract::__construct</strong></span>
    ( <span class="methodparam">void</span>
   )</div>

  <p class="para rdfs-comment">
    <span class="methodname"><strong>Yaf_Controller_Abstract::__construct()</strong></span> is final,
    which means it can not be overridden.
    You may want to see
    <span class="methodname"><a href="yaf-controller-abstract.init.php" class="methodname">Yaf_Controller_Abstract::init()</a></span> instead.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-controller-abstract.construct-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-controller-abstract.construct-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-yaf-controller-abstract.construct-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li class="member"><span class="methodname"><a href="yaf-controller-abstract.init.php" class="methodname" rel="rdfs-seeAlso">Yaf_Controller_Abstract::init()</a> - Controller initializer</span></li>
  </ul>
 </div>


</div><?php manual_footer(); ?>