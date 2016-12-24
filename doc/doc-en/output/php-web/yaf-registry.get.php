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
    0 => 'yaf-registry.get.php',
    1 => 'Yaf_Registry::get',
  ),
  'up' => 
  array (
    0 => 'class.yaf-registry.php',
    1 => 'Yaf_Registry',
  ),
  'prev' => 
  array (
    0 => 'yaf-registry.del.php',
    1 => 'Yaf_Registry::del',
  ),
  'next' => 
  array (
    0 => 'yaf-registry.has.php',
    1 => 'Yaf_Registry::has',
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
<div id="yaf-registry.get" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Registry::get</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Registry::get</span> &mdash; <span class="dc-title">Retrieve an item from registry</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-registry.get-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="modifier">static</span> <span class="type"><a href="language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>Yaf_Registry::get</strong></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   )</div>

  <p class="para rdfs-comment">
   Retrieve an item from registry
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-registry.get-parameters">
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


 <div class="refsect1 returnvalues" id="refsect1-yaf-registry.get-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>