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
    0 => 'class.yaf-view-simple.php',
    1 => 'Yaf_View_Simple',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'yaf-view-interface.setscriptpath.php',
    1 => 'Yaf_View_Interface::setScriptPath',
  ),
  'next' => 
  array (
    0 => 'yaf-view-simple.assign.php',
    1 => 'Yaf_View_Simple::assign',
  ),
  'alternatives' => 
  array (
  ),
  'extra_header_links' => 
  array (
    'rel' => 'alternate',
    'href' => '/manual/en/feeds/class.yaf-view-simple.atom',
    'type' => 'application/atom+xml',
  ),
);
$setup["toc"] = $TOC;
$setup["parents"] = $PARENTS;
manual_setup($setup);

manual_header();
?>
<div id="class.yaf-view-simple" class="reference">

 <h1 class="title">The Yaf_View_Simple class</h1>
 

 <div class="partintro"><p class="verinfo">(Yaf &gt;=1.0.0)</p>


  <div class="section" id="yaf-view-simple.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
     <strong class="classname">Yaf_View_Simple</strong> is the built-in template engine in
     Yaf, it is a simple but fast template engine, and only support PHP script
     template.
   </p>
  </div>


  <div class="section" id="yaf-view-simple.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <div class="ooclass"></div>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <strong class="classname">Yaf_View_Simple</strong>
     </span>
     
     <span class="oointerface">implements 
      <span class="interfacename"><a href="class.yaf-view-interface.php" class="interfacename">Yaf_View_Interface</a></span>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-view-simple.php#yaf-view-simple.props.tpl-vars">$<var class="varname">_tpl_vars</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-view-simple.php#yaf-view-simple.props.tpl-dir">$<var class="varname">_tpl_dir</var></a></var>
    ;</div>


    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-view-simple.assign.php" class="methodname">assign</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   [, <span class="methodparam"><span class="type"><a href="language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-view-simple.assignref.php" class="methodname">assignRef</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   , <span class="methodparam"><span class="type"><a href="language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter reference">&$value</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-view-simple.clear.php" class="methodname">clear</a></span>
    ([ <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">final</span> <span class="modifier">public</span> <span class="methodname"><a href="yaf-view-simple.construct.php" class="methodname">__construct</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$template_dir</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$options</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-view-simple.display.php" class="methodname">display</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$tpl</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$tpl_vars</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="yaf-view-simple.eval.php" class="methodname">eval</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$tpl_content</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$tpl_vars</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-view-simple.get.php" class="methodname">__get</a></span>
    ([ <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="yaf-view-simple.getscriptpath.php" class="methodname">getScriptPath</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-view-simple.isset.php" class="methodname">__isset</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="yaf-view-simple.render.php" class="methodname">render</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$tpl</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$tpl_vars</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-view-simple.set.php" class="methodname">__set</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   , <span class="methodparam"><span class="type"><a href="language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-view-simple.setscriptpath.php" class="methodname">setScriptPath</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$template_dir</code></span>
   )</div>

   }</div>


  </div>

  

  <div class="section" id="yaf-view-simple.props">
   <h2 class="title">Properties</h2>
   <dl>

    
     <dt id="yaf-view-simple.props.tpl-vars"><var class="varname"><var class="varname">_tpl_vars</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-view-simple.props.tpl-dir"><var class="varname"><var class="varname">_tpl_dir</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
   </dl>

  </div>



 </div>

 





















































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="yaf-view-simple.assign.php">Yaf_View_Simple::assign</a> — Assign values</li><li><a href="yaf-view-simple.assignref.php">Yaf_View_Simple::assignRef</a> — The assignRef purpose</li><li><a href="yaf-view-simple.clear.php">Yaf_View_Simple::clear</a> — Clear Assigned values</li><li><a href="yaf-view-simple.construct.php">Yaf_View_Simple::__construct</a> — Constructor of Yaf_View_Simple</li><li><a href="yaf-view-simple.display.php">Yaf_View_Simple::display</a> — Render and display</li><li><a href="yaf-view-simple.eval.php">Yaf_View_Simple::eval</a> — Render template</li><li><a href="yaf-view-simple.get.php">Yaf_View_Simple::__get</a> — Retrieve assigned variable</li><li><a href="yaf-view-simple.getscriptpath.php">Yaf_View_Simple::getScriptPath</a> — Get templates directory</li><li><a href="yaf-view-simple.isset.php">Yaf_View_Simple::__isset</a> — The __isset purpose</li><li><a href="yaf-view-simple.render.php">Yaf_View_Simple::render</a> — Render template</li><li><a href="yaf-view-simple.set.php">Yaf_View_Simple::__set</a> — Set value to engine</li><li><a href="yaf-view-simple.setscriptpath.php">Yaf_View_Simple::setScriptPath</a> — Set tempaltes directory</li></ul>
</div>
<?php manual_footer(); ?>