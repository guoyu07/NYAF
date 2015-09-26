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
    0 => 'yaf-controller-abstract.redirect.php',
    1 => 'Yaf_Controller_Abstract::redirect',
  ),
  'up' => 
  array (
    0 => 'class.yaf-controller-abstract.php',
    1 => 'Yaf_Controller_Abstract',
  ),
  'prev' => 
  array (
    0 => 'yaf-controller-abstract.initview.php',
    1 => 'Yaf_Controller_Abstract::initView',
  ),
  'next' => 
  array (
    0 => 'yaf-controller-abstract.render.php',
    1 => 'Yaf_Controller_Abstract::render',
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
<div id="yaf-controller-abstract.redirect" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Controller_Abstract::redirect</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Controller_Abstract::redirect</span> &mdash; <span class="dc-title">Redirect to a URL</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-controller-abstract.redirect-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><strong>Yaf_Controller_Abstract::redirect</strong></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$url</code></span>
   )</div>

  <p class="para rdfs-comment">
    redirect to a URL by sending a 302 header
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-controller-abstract.redirect-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">url</code></dt>

    <dd>

     <p class="para">
      a location URL
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-controller-abstract.redirect-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
    bool
  </p>
 </div>



</div><?php manual_footer(); ?>