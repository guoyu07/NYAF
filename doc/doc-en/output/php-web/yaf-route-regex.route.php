<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-route-regex.inc";
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
    0 => 'yaf-route-regex.route.php',
    1 => 'Yaf_Route_Regex::route',
  ),
  'up' => 
  array (
    0 => 'class.yaf-route-regex.php',
    1 => 'Yaf_Route_Regex',
  ),
  'prev' => 
  array (
    0 => 'yaf-route-regex.construct.php',
    1 => 'Yaf_Route_Regex::__construct',
  ),
  'next' => 
  array (
    0 => 'class.yaf-route-rewrite.php',
    1 => 'Yaf_Route_Rewrite',
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
<div id="yaf-route-regex.route" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Route_Regex::route</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Route_Regex::route</span> &mdash; <span class="dc-title">The route purpose</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-route-regex.route-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><strong>Yaf_Route_Regex::route</strong></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-request-abstract.php" class="type Yaf_Request_Abstract">Yaf_Request_Abstract</a></span> <code class="parameter">$request</code></span>
   )</div>

  <p class="para rdfs-comment">
   Route a incoming request.
  </p>

  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
currently not documented; only its argument list is available.
</p></div>

 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-route-regex.route-parameters">
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


 <div class="refsect1 returnvalues" id="refsect1-yaf-route-regex.route-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   If the pattern given by the first parameter of 
   <span class="methodname"><strong>Yaf_Route_Regex::_construct()</strong></span> matche the request
   uri, return <strong><code>TRUE</code></strong>, otherwise return <strong><code>FALSE</code></strong>.
  </p>
 </div>



</div><?php manual_footer(); ?>