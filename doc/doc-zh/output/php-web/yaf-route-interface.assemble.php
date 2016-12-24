<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-route-interface.inc";
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
    0 => 'yaf-route-interface.assemble.php',
    1 => 'Yaf_Route_Interface::assemble',
  ),
  'up' => 
  array (
    0 => 'class.yaf-route-interface.php',
    1 => 'Yaf_Route_Interface',
  ),
  'prev' => 
  array (
    0 => 'class.yaf-route-interface.php',
    1 => 'Yaf_Route_Interface',
  ),
  'next' => 
  array (
    0 => 'yaf-route-interface.route.php',
    1 => 'Yaf_Route_Interface::route',
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
<div id="yaf-route-interface.assemble" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Route_Interface::assemble</h1>
  <p class="verinfo">(Yaf &gt;=2.3.0)</p><p class="refpurpose"><span class="refname">Yaf_Route_Interface::assemble</span> &mdash; <span class="dc-title">assemble a request</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-route-interface.assemble-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">abstract</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><strong>Yaf_Route_Interface::assemble</strong></span>
    ( <span class="methodparam"><span class="type">array</span> <code class="parameter">$info</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$query</code></span>
  ] )</div>

  <p class="para rdfs-comment">
   this method returns a url according to the argument info, and append
   query strings to the url according to the argument query.
  </p>
  <p class="para">
   a route should implement this method according to its own route rules, and
   do a reverse progress.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-route-interface.assemble-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">info</code></dt>

    <dd>

     <p class="para">
     
     </p>
    </dd>

   

   
    <dt>
<code class="parameter">query</code></dt>

    <dd>

     <p class="para">

     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-route-interface.assemble-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>