<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-session.inc";
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
    0 => 'yaf-session.getinstance.php',
    1 => 'Yaf_Session::getInstance',
  ),
  'up' => 
  array (
    0 => 'class.yaf-session.php',
    1 => 'Yaf_Session',
  ),
  'prev' => 
  array (
    0 => 'yaf-session.get.php',
    1 => 'Yaf_Session::__get',
  ),
  'next' => 
  array (
    0 => 'yaf-session.has.php',
    1 => 'Yaf_Session::has',
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
<div id="yaf-session.getinstance" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Session::getInstance</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Session::getInstance</span> &mdash; <span class="dc-title">The getInstance purpose</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-session.getinstance-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="modifier">static</span> <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>Yaf_Session::getInstance</strong></span>
    ( <span class="methodparam">void</span>
   )</div>

  <p class="para rdfs-comment">

  </p>

  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
currently not documented; only its argument list is available.
</p></div>

 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-session.getinstance-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-session.getinstance-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>