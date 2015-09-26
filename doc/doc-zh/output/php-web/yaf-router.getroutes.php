<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-router.inc";
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
    0 => 'yaf-router.getroutes.php',
    1 => 'Yaf_Router::getRoutes',
  ),
  'up' => 
  array (
    0 => 'class.yaf-router.php',
    1 => 'Yaf_Router',
  ),
  'prev' => 
  array (
    0 => 'yaf-router.getroute.php',
    1 => 'Yaf_Router::getRoute',
  ),
  'next' => 
  array (
    0 => 'yaf-router.route.php',
    1 => 'Yaf_Router::route',
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
<div id="yaf-router.getroutes" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Router::getRoutes</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Router::getRoutes</span> &mdash; <span class="dc-title">Retrieve registered routes</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-router.getroutes-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><a href="language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <span class="methodname"><strong>Yaf_Router::getRoutes</strong></span>
    ( <span class="methodparam">void</span>
   )</div>

  <p class="para rdfs-comment">
   Retrieve registered routes
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-router.getroutes-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-router.getroutes-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>