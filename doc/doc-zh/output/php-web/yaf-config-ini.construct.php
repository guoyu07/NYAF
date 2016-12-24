<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/class.yaf-config-ini.inc";
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
    0 => 'yaf-config-ini.construct.php',
    1 => 'Yaf_Config_Ini::__construct',
  ),
  'up' => 
  array (
    0 => 'class.yaf-config-ini.php',
    1 => 'Yaf_Config_Ini',
  ),
  'prev' => 
  array (
    0 => 'class.yaf-config-ini.php',
    1 => 'Yaf_Config_Ini',
  ),
  'next' => 
  array (
    0 => 'yaf-config-ini.count.php',
    1 => 'Yaf_Config_Ini::count',
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
<div id="yaf-config-ini.construct" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Config_Ini::__construct</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Config_Ini::__construct</span> &mdash; <span class="dc-title">Yaf_Config_Ini constructor</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-config-ini.construct-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>Yaf_Config_Ini::__construct</strong></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$config_file</code></span>
   [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$section</code></span>
  ] )</div>

  <p class="para rdfs-comment">
    <a href="class.yaf-config-ini.php" class="classname">Yaf_Config_Ini</a> constructor
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-config-ini.construct-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">config_file</code></dt>

    <dd>

     <p class="para">
      path to an INI configure file
     </p>
    </dd>

   
   
    <dt>
<code class="parameter">section</code></dt>

    <dd>

     <p class="para">
      which section in that INI file you want to be parsed
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-config-ini.construct-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>