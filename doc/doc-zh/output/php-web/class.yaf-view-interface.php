<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/shared-manual.inc';
$TOC = array();
$PARENTS = array();
include_once dirname(__FILE__) ."/toc/book.yaf.inc";
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
    0 => 'class.yaf-view-interface.php',
    1 => 'Yaf_View_Interface',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'yaf-action-abstract.getcontroller.php',
    1 => 'Yaf_Action_Abstract::getController',
  ),
  'next' => 
  array (
    0 => 'yaf-view-interface.assign.php',
    1 => 'Yaf_View_Interface::assign',
  ),
  'alternatives' => 
  array (
  ),
  'extra_header_links' => 
  array (
    'rel' => 'alternate',
    'href' => '/manual/en/feeds/class.yaf-view-interface.atom',
    'type' => 'application/atom+xml',
  ),
);
$setup["toc"] = $TOC;
$setup["parents"] = $PARENTS;
manual_setup($setup);

manual_header();
?>
<div id="class.yaf-view-interface" class="reference">

 <h1 class="title">The Yaf_View_Interface class</h1>
 

 <div class="partintro"><p class="verinfo">(Yaf &gt;=1.0.0)</p>


  <div class="section" id="yaf-view-interface.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    Yaf provides a ability for developers to use coustom view engine instead
    of build-in engine which is <a href="class.yaf-view-simple.php" class="classname">Yaf_View_Simple</a>. There 
    is a example to explain how to do this, please see
    <span class="methodname"><a href="yaf-dispatcher.setview.php" class="methodname">Yaf_Dispatcher::setView()</a></span>.
   </p>
  </div>


  <div class="section" id="yaf-view-interface.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <div class="ooclass"></div>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <strong class="classname">Yaf_View_Interface</strong>
     </span>
     {</div>

    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">abstract</span> <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-view-interface.assign.php" class="methodname">assign</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$value</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">abstract</span> <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-view-interface.display.php" class="methodname">display</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$tpl</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$tpl_vars</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">abstract</span> <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-view-interface.getscriptpath.php" class="methodname">getScriptPath</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">abstract</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="yaf-view-interface.render.php" class="methodname">render</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$tpl</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$tpl_vars</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">abstract</span> <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-view-interface.setscriptpath.php" class="methodname">setScriptPath</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$template_dir</code></span>
   )</div>

   }</div>


  </div>

 </div>

 




































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="yaf-view-interface.assign.php">Yaf_View_Interface::assign</a> — Assign value to View engine</li><li><a href="yaf-view-interface.display.php">Yaf_View_Interface::display</a> — Render and output a template</li><li><a href="yaf-view-interface.getscriptpath.php">Yaf_View_Interface::getScriptPath</a> — The getScriptPath purpose</li><li><a href="yaf-view-interface.render.php">Yaf_View_Interface::render</a> — Render a template</li><li><a href="yaf-view-interface.setscriptpath.php">Yaf_View_Interface::setScriptPath</a> — The setScriptPath purpose</li></ul>
</div>
<?php manual_footer(); ?>