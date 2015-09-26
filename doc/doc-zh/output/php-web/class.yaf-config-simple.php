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
    0 => 'class.yaf-config-simple.php',
    1 => 'Yaf_Config_Simple',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'yaf-config-ini.valid.php',
    1 => 'Yaf_Config_Ini::valid',
  ),
  'next' => 
  array (
    0 => 'yaf-config-simple.construct.php',
    1 => 'Yaf_Config_Simple::__construct',
  ),
  'alternatives' => 
  array (
  ),
  'extra_header_links' => 
  array (
    'rel' => 'alternate',
    'href' => '/manual/en/feeds/class.yaf-config-simple.atom',
    'type' => 'application/atom+xml',
  ),
);
$setup["toc"] = $TOC;
$setup["parents"] = $PARENTS;
manual_setup($setup);

manual_header();
?>
<div id="class.yaf-config-simple" class="reference">

 <h1 class="title">The Yaf_Config_Simple class</h1>
 

 <div class="partintro"><p class="verinfo">(Yaf &gt;=1.0.0)</p>


  <div class="section" id="yaf-config-simple.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">

   </p>
  </div>


  <div class="section" id="yaf-config-simple.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <div class="ooclass"></div>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <strong class="classname">Yaf_Config_Simple</strong>
     </span>
     
     <span class="ooclass">
      <span class="modifier">extends</span>
      <a href="class.yaf-config-abstract.php" class="classname">Yaf_Config_Abstract</a>
     </span>
     
     <span class="oointerface">implements 
      <span class="interfacename"><strong class="interfacename">Iterator</strong></span>
     </span>

     <span class="oointerface">, 
      <span class="interfacename"><strong class="interfacename">ArrayAccess</strong></span>
     </span>

     <span class="oointerface">, 
      <span class="interfacename"><strong class="interfacename">Countable</strong></span>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-config-simple.php#yaf-config-simple.props.readonly">$<var class="varname">_readonly</var></a></var>
    ;</div>


    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="yaf-config-simple.construct.php" class="methodname">__construct</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$config_file</code></span>
   [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$section</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-config-simple.count.php" class="methodname">count</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-config-simple.current.php" class="methodname">current</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-config-simple.get.php" class="methodname">__get</a></span>
    ([ <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-config-simple.isset.php" class="methodname">__isset</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-config-simple.key.php" class="methodname">key</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-config-simple.next.php" class="methodname">next</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-config-simple.offsetexists.php" class="methodname">offsetExists</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-config-simple.offsetget.php" class="methodname">offsetGet</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-config-simple.offsetset.php" class="methodname">offsetSet</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   , <span class="methodparam"><span class="type">string</span> <code class="parameter">$value</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-config-simple.offsetunset.php" class="methodname">offsetUnset</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-config-simple.readonly.php" class="methodname">readonly</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-config-simple.rewind.php" class="methodname">rewind</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-config-simple.set.php" class="methodname">__set</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   , <span class="methodparam"><span class="type">string</span> <code class="parameter">$value</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="yaf-config-simple.toarray.php" class="methodname">toArray</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-config-simple.valid.php" class="methodname">valid</a></span>
    ( <span class="methodparam">void</span>
   )</div>

    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">abstract</span> <span class="modifier">public</span> <span class="type">mixed</span> <span class="methodname"><a href="yaf-config-abstract.get.php" class="methodname">Yaf_Config_Abstract::get</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   , <span class="methodparam"><span class="type"><a href="language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">abstract</span> <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-config-abstract.readonly.php" class="methodname">Yaf_Config_Abstract::readonly</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">abstract</span> <span class="modifier">public</span> <span class="type">Yaf_Config_Abstract</span> <span class="methodname"><a href="yaf-config-abstract.set.php" class="methodname">Yaf_Config_Abstract::set</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">abstract</span> <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="yaf-config-abstract.toarray.php" class="methodname">Yaf_Config_Abstract::toArray</a></span>
    ( <span class="methodparam">void</span>
   )</div>


   }</div>


  </div>

  

  <div class="section" id="yaf-config-simple.props">
   <h2 class="title">Properties</h2>
   <dl>

    
     <dt id="yaf-config-simple.props.config"><var class="varname"><var class="varname">_config</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-config-simple.props.readonly"><var class="varname"><var class="varname">_readonly</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
   </dl>

  </div>



 </div>

 

















































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="yaf-config-simple.construct.php">Yaf_Config_Simple::__construct</a> — The __construct purpose</li><li><a href="yaf-config-simple.count.php">Yaf_Config_Simple::count</a> — The count purpose</li><li><a href="yaf-config-simple.current.php">Yaf_Config_Simple::current</a> — The current purpose</li><li><a href="yaf-config-simple.get.php">Yaf_Config_Simple::__get</a> — The __get purpose</li><li><a href="yaf-config-simple.isset.php">Yaf_Config_Simple::__isset</a> — The __isset purpose</li><li><a href="yaf-config-simple.key.php">Yaf_Config_Simple::key</a> — The key purpose</li><li><a href="yaf-config-simple.next.php">Yaf_Config_Simple::next</a> — The next purpose</li><li><a href="yaf-config-simple.offsetexists.php">Yaf_Config_Simple::offsetExists</a> — The offsetExists purpose</li><li><a href="yaf-config-simple.offsetget.php">Yaf_Config_Simple::offsetGet</a> — The offsetGet purpose</li><li><a href="yaf-config-simple.offsetset.php">Yaf_Config_Simple::offsetSet</a> — The offsetSet purpose</li><li><a href="yaf-config-simple.offsetunset.php">Yaf_Config_Simple::offsetUnset</a> — The offsetUnset purpose</li><li><a href="yaf-config-simple.readonly.php">Yaf_Config_Simple::readonly</a> — The readonly purpose</li><li><a href="yaf-config-simple.rewind.php">Yaf_Config_Simple::rewind</a> — The rewind purpose</li><li><a href="yaf-config-simple.set.php">Yaf_Config_Simple::__set</a> — The __set purpose</li><li><a href="yaf-config-simple.toarray.php">Yaf_Config_Simple::toArray</a> — Returns a PHP array</li><li><a href="yaf-config-simple.valid.php">Yaf_Config_Simple::valid</a> — The valid purpose</li></ul>
</div>
<?php manual_footer(); ?>