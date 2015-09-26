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
    0 => 'yaf-view-interface.getscriptpath.php',
    1 => 'Yaf_View_Interface::getScriptPath',
  ),
  'up' => 
  array (
    0 => 'class.yaf-view-interface.php',
    1 => 'Yaf_View_Interface',
  ),
  'prev' => 
  array (
    0 => 'yaf-view-interface.display.php',
    1 => 'Yaf_View_Interface::display',
  ),
  'next' => 
  array (
    0 => 'yaf-view-interface.render.php',
    1 => 'Yaf_View_Interface::render',
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
<div id="yaf-view-interface.getscriptpath" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_View_Interface::getScriptPath</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_View_Interface::getScriptPath</span> &mdash; <span class="dc-title">The getScriptPath purpose</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-view-interface.getscriptpath-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">abstract</span> <span class="modifier">public</span> <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>Yaf_View_Interface::getScriptPath</strong></span>
    ( <span class="methodparam">void</span>
   )</div>

  <p class="para rdfs-comment">

  </p>

  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
currently not documented; only its argument list is available.
</p></div>

 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-view-interface.getscriptpath-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-view-interface.getscriptpath-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>