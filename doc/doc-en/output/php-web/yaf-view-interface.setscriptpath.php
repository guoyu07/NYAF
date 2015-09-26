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
    0 => 'yaf-view-interface.setscriptpath.php',
    1 => 'Yaf_View_Interface::setScriptPath',
  ),
  'up' => 
  array (
    0 => 'class.yaf-view-interface.php',
    1 => 'Yaf_View_Interface',
  ),
  'prev' => 
  array (
    0 => 'yaf-view-interface.render.php',
    1 => 'Yaf_View_Interface::render',
  ),
  'next' => 
  array (
    0 => 'class.yaf-view-simple.php',
    1 => 'Yaf_View_Simple',
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
<div id="yaf-view-interface.setscriptpath" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Yaf_View_Interface::setScriptPath</h1>
  <p class="verinfo">(Yaf &gt;=1.0.0)</p><p class="refpurpose"><span class="refname">Yaf_View_Interface::setScriptPath</span> &mdash; <span class="dc-title">The setScriptPath purpose</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-yaf-view-interface.setscriptpath-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">abstract</span> <span class="modifier">public</span> <span class="type"><span class="type void">void</span></span> <span class="methodname"><strong>Yaf_View_Interface::setScriptPath</strong></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$template_dir</code></span>
   )</div>

  <p class="para rdfs-comment">
    Set the templates base directory, this is usually called by
    <a href="class.yaf-dispatcher.php" class="classname">Yaf_Dispatcher</a>
  </p>

  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
currently not documented; only its argument list is available.
</p></div>

 </div>


 <div class="refsect1 parameters" id="refsect1-yaf-view-interface.setscriptpath-parameters">
  <h3 class="title">Parameters</h3>
  <dl>

   
    <dt>
<code class="parameter">template_dir</code></dt>

    <dd>

     <p class="para">
      A absolute path to the template directory, by default,
      <a href="class.yaf-dispatcher.php" class="classname">Yaf_Dispatcher</a> use
      <a href="yaf.appconfig.php#configuration.yaf.directory" class="link">application.directory</a> . &quot;/views&quot; as this paramter.
     </p>
    </dd>

   
  </dl>

 </div>


 <div class="refsect1 returnvalues" id="refsect1-yaf-view-interface.setscriptpath-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">

  </p>
 </div>



</div><?php manual_footer(); ?>