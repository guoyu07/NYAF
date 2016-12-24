<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-registry.inc";
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
    0 => 'yaf-registry.has.php',
    1 => 'Yaf_Registry::has',
  ),
  'up' => 
  array (
    0 => 'class.yaf-registry.php',
    1 => 'Yaf_Registry',
  ),
  'prev' => 
  array (
    0 => 'yaf-registry.get.php',
    1 => 'Yaf_Registry::get',
  ),
  'next' => 
  array (
    0 => 'yaf-registry.set.php',
    1 => 'Yaf_Registry::set',
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
<div id="yaf-registry.has" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Registry::has</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Registry::has</span> &mdash; <span class="dc-title">Check whether an item exists</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-registry.has-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="modifier">static</span> <span class="type">bool</span> <span class="methodname"><strong>Yaf_Registry::has</strong></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   )</div>

  <p class="para rdfs-comment">
    Check whether an item exists
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-registry.has-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">name</code></dt>

    <dd>

     <p class="para">
      
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-registry.has-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>