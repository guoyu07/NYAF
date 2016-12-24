<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-route-static.inc";
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
    0 => 'yaf-route-static.match.php',
    1 => 'Yaf_Route_Static::match',
  ),
  'up' => 
  array (
    0 => 'class.yaf-route-static.php',
    1 => 'Yaf_Route_Static',
  ),
  'prev' => 
  array (
    0 => 'yaf-route-static.assemble.php',
    1 => 'Yaf_Route_Static::assemble',
  ),
  'next' => 
  array (
    0 => 'yaf-route-static.route.php',
    1 => 'Yaf_Route_Static::route',
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
<div id="yaf-route-static.match" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Route_Static::match</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Route_Static::match</span> &mdash; <span class="dc-title">The match purpose</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-route-static.match-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>Yaf_Route_Static::match</strong></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$uri</code></span>
   )</div>

  <p class="para rdfs-comment">

  </p>

  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
currently not documented; only its argument list is available.
</p></div>

 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-route-static.match-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">uri</code></dt>

    <dd>

     <p class="para">
      
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-route-static.match-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>