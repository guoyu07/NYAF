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
    0 => 'yaf-view-simple.setscriptpath.php',
    1 => 'Yaf_View_Simple::setScriptPath',
  ),
  'up' => 
  array (
    0 => 'class.yaf-view-simple.php',
    1 => 'Yaf_View_Simple',
  ),
  'prev' => 
  array (
    0 => 'yaf-view-simple.set.php',
    1 => 'Yaf_View_Simple::__set',
  ),
  'next' => 
  array (
    0 => 'class.yaf-loader.php',
    1 => 'Yaf_Loader',
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
<div id="yaf-view-simple.setscriptpath" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_View_Simple::setScriptPath</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_View_Simple::setScriptPath</span> &mdash; <span class="dc-title">Set tempaltes directory</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-view-simple.setscriptpath-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><strong>Yaf_View_Simple::setScriptPath</strong></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$template_dir</code></span>
   )</div>

  <p class="para rdfs-comment">

  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-view-simple.setscriptpath-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">template_dir</code></dt>

    <dd>

     <p class="para">
      
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-view-simple.setscriptpath-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>