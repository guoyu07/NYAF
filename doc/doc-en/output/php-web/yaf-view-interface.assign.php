<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-view-interface.inc";
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
    0 => 'yaf-view-interface.assign.php',
    1 => 'Yaf_View_Interface::assign',
  ),
  'up' => 
  array (
    0 => 'class.yaf-view-interface.php',
    1 => 'Yaf_View_Interface',
  ),
  'prev' => 
  array (
    0 => 'class.yaf-view-interface.php',
    1 => 'Yaf_View_Interface',
  ),
  'next' => 
  array (
    0 => 'yaf-view-interface.display.php',
    1 => 'Yaf_View_Interface::display',
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
<div id="yaf-view-interface.assign" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_View_Interface::assign</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_View_Interface::assign</span> &mdash; <span class="dc-title">Assign value to View engine</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-view-interface.assign-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">abstract</span> <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><strong>Yaf_View_Interface::assign</strong></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$value</code></span>
  ] )</div>

  <p class="para rdfs-comment">
     Assigan values to View engine, then the value can access directly by name in template.
  </p>

  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
currently not documented; only its argument list is available.
</p></div>

 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-view-interface.assign-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">name</code></dt>

    <dd>

     <p class="para">
      
     </p>
    </dd>

   
   
    <dt>
<code class="parameter">value</code></dt>

    <dd>

     <p class="para">
      
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-view-interface.assign-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>