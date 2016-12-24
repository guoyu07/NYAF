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
    0 => 'yaf-controller-abstract.initview.php',
    1 => 'Yaf_Controller_Abstract::initView',
  ),
  'up' => 
  array (
    0 => 'class.yaf-controller-abstract.php',
    1 => 'Yaf_Controller_Abstract',
  ),
  'prev' => 
  array (
    0 => 'yaf-controller-abstract.init.php',
    1 => 'Yaf_Controller_Abstract::init',
  ),
  'next' => 
  array (
    0 => 'yaf-controller-abstract.redirect.php',
    1 => 'Yaf_Controller_Abstract::redirect',
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
<div id="yaf-controller-abstract.initview" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Controller_Abstract::initView</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Controller_Abstract::initView</span> &mdash; <span class="dc-title">The initView purpose</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-controller-abstract.initview-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>Yaf_Controller_Abstract::initView</strong></span>
    ([ <span class="methodparam"><span class="type">array</span> <code class="parameter">$options</code></span>
  ] )</div>

  <p class="para rdfs-comment">

  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-controller-abstract.initview-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">options</code></dt>

    <dd>

     <p class="para">
      
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-controller-abstract.initview-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>