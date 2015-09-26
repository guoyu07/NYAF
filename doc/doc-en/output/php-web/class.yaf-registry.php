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
    0 => 'class.yaf-registry.php',
    1 => 'Yaf_Registry',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'yaf-plugin-abstract.routerstartup.php',
    1 => 'Yaf_Plugin_Abstract::routerStartup',
  ),
  'next' => 
  array (
    0 => 'yaf-registry.clone.php',
    1 => 'Yaf_Registry::__clone',
  ),
  'alternatives' => 
  array (
  ),
  'extra_header_links' => 
  array (
    'rel' => 'alternate',
    'href' => '/manual/en/feeds/class.yaf-registry.atom',
    'type' => 'application/atom+xml',
  ),
);
$setup["toc"] = $TOC;
$setup["parents"] = $PARENTS;
manual_setup($setup);

manual_header();
?>
<div id="class.yaf-registry" class="reference">

 <h1 class="title">The Yaf_Registry class</h1>
 

 <div class="partintro"><p class="verinfo">(Yaf &gt;=1.0.0)</p>


  <div class="section" id="yaf-registry.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
     All methods of <strong class="classname">Yaf_Registry</strong> declared as static, making it
     unversally accessible. This provides the ability to get or set any custom
     data from anyway in your code as necessary.
   </p>
  </div>


  <div class="section" id="yaf-registry.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <div class="ooclass"></div>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <strong class="classname">Yaf_Registry</strong>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">static</span>
      <var class="varname"><a href="class.yaf-registry.php#yaf-registry.props.instance">$<var class="varname">_instance</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-registry.php#yaf-registry.props.entries">$<var class="varname">_entries</var></a></var>
    ;</div>


    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">private</span> <span class="type">void</span> <span class="methodname"><a href="yaf-registry.clone.php" class="methodname">__clone</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="methodname"><a href="yaf-registry.construct.php" class="methodname">__construct</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="modifier">static</span> <span class="type">void</span> <span class="methodname"><a href="yaf-registry.del.php" class="methodname">del</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="modifier">static</span> <span class="type">mixed</span> <span class="methodname"><a href="yaf-registry.get.php" class="methodname">get</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="modifier">static</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-registry.has.php" class="methodname">has</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="modifier">static</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-registry.set.php" class="methodname">set</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   , <span class="methodparam"><span class="type">string</span> <code class="parameter">$value</code></span>
   )</div>

   }</div>


  </div>

  

  <div class="section" id="yaf-registry.props">
   <h2 class="title">Properties</h2>
   <dl>

    
     <dt id="yaf-registry.props.instance"><var class="varname"><var class="varname">_instance</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-registry.props.entries"><var class="varname"><var class="varname">_entries</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
   </dl>

  </div>



 </div>

 











































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="yaf-registry.clone.php">Yaf_Registry::__clone</a> — The __clone purpose</li><li><a href="yaf-registry.construct.php">Yaf_Registry::__construct</a> — Yaf_Registry implements singleton</li><li><a href="yaf-registry.del.php">Yaf_Registry::del</a> — Remove an item from registry</li><li><a href="yaf-registry.get.php">Yaf_Registry::get</a> — Retrieve an item from registry</li><li><a href="yaf-registry.has.php">Yaf_Registry::has</a> — Check whether an item exists</li><li><a href="yaf-registry.set.php">Yaf_Registry::set</a> — Add an item into registry</li></ul>
</div>
<?php manual_footer(); ?>