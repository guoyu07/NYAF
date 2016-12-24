<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-view-simple.inc";
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
    0 => 'yaf-view-simple.render.php',
    1 => 'Yaf_View_Simple::render',
  ),
  'up' => 
  array (
    0 => 'class.yaf-view-simple.php',
    1 => 'Yaf_View_Simple',
  ),
  'prev' => 
  array (
    0 => 'yaf-view-simple.isset.php',
    1 => 'Yaf_View_Simple::__isset',
  ),
  'next' => 
  array (
    0 => 'yaf-view-simple.set.php',
    1 => 'Yaf_View_Simple::__set',
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
<div id="yaf-view-simple.render" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_View_Simple::render</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_View_Simple::render</span> &mdash; <span class="dc-title">Render template</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-view-simple.render-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><strong>Yaf_View_Simple::render</strong></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$tpl</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$tpl_vars</code></span>
  ] )</div>

  <p class="para rdfs-comment">
    Render a template and return the result.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-view-simple.render-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">tpl</code></dt>

    <dd>

     <p class="para">
      
     </p>
    </dd>

   
   
    <dt>
<code class="parameter">tpl_vars</code></dt>

    <dd>

     <p class="para">
      
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-view-simple.render-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>