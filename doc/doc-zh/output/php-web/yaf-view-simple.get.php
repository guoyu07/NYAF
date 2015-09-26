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
    0 => 'yaf-view-simple.get.php',
    1 => 'Yaf_View_Simple::__get',
  ),
  'up' => 
  array (
    0 => 'class.yaf-view-simple.php',
    1 => 'Yaf_View_Simple',
  ),
  'prev' => 
  array (
    0 => 'yaf-view-simple.eval.php',
    1 => 'Yaf_View_Simple::eval',
  ),
  'next' => 
  array (
    0 => 'yaf-view-simple.getscriptpath.php',
    1 => 'Yaf_View_Simple::getScriptPath',
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
<div id="yaf-view-simple.get" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_View_Simple::__get</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_View_Simple::__get</span> &mdash; <span class="dc-title">Retrieve assigned variable</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-view-simple.get-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>Yaf_View_Simple::__get</strong></span>
    ([ <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
  ] )</div>

  <p class="para rdfs-comment">
   Retrieve assigned varaiable
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     parameter can be empty since 2.1.11
    </p>
   </p></blockquote>
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-view-simple.get-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">name</code></dt>

    <dd>

     <p class="para">
      the assigned variable name
     </p>
     <p class="para">
      if this is empty, all assigned variables will be returned
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-view-simple.get-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>