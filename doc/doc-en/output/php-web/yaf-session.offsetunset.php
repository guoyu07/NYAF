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
    0 => 'yaf-session.offsetunset.php',
    1 => 'Yaf_Session::offsetUnset',
  ),
  'up' => 
  array (
    0 => 'class.yaf-session.php',
    1 => 'Yaf_Session',
  ),
  'prev' => 
  array (
    0 => 'yaf-session.offsetset.php',
    1 => 'Yaf_Session::offsetSet',
  ),
  'next' => 
  array (
    0 => 'yaf-session.rewind.php',
    1 => 'Yaf_Session::rewind',
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
<div id="yaf-session.offsetunset" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_Session::offsetUnset</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_Session::offsetUnset</span> &mdash; <span class="dc-title">The offsetUnset purpose</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-session.offsetunset-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>Yaf_Session::offsetUnset</strong></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   )</div>

  <p class="para rdfs-comment">

  </p>

  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
currently not documented; only its argument list is available.
</p></div>

 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-session.offsetunset-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">name</code></dt>

    <dd>

     <p class="para">
      
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-session.offsetunset-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>