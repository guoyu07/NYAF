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
    0 => 'class.yaf-config-abstract.php',
    1 => 'Yaf_Config_Abstract',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'yaf-dispatcher.wakeup.php',
    1 => 'Yaf_Dispatcher::__wakeup',
  ),
  'next' => 
  array (
    0 => 'yaf-config-abstract.get.php',
    1 => 'Yaf_Config_Abstract::get',
  ),
  'alternatives' => 
  array (
  ),
  'extra_header_links' => 
  array (
    'rel' => 'alternate',
    'href' => '/manual/en/feeds/class.yaf-config-abstract.atom',
    'type' => 'application/atom+xml',
  ),
);
$setup["toc"] = $TOC;
$setup["parents"] = $PARENTS;
manual_setup($setup);

manual_header();
?>
<div id="class.yaf-config-abstract" class="reference">

 <h1 class="title">The Yaf_Config_Abstract class</h1>
 

 <div class="partintro"><p class="verinfo">(Yaf &gt;=1.0.0)</p>


  <div class="section" id="yaf-config-abstract.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">

   </p>
  </div>


  <div class="section" id="yaf-config-abstract.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <div class="ooclass"></div>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">abstract</span>
      <strong class="classname">Yaf_Config_Abstract</strong>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-config-abstract.php#yaf-config-abstract.props.config">$<var class="varname">_config</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-config-abstract.php#yaf-config-abstract.props.readonly">$<var class="varname">_readonly</var></a></var>
    ;</div>


    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">abstract</span> <span class="modifier">public</span> <span class="type">mixed</span> <span class="methodname"><a href="yaf-config-abstract.get.php" class="methodname">get</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   , <span class="methodparam"><span class="type"><a href="language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">abstract</span> <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-config-abstract.readonly.php" class="methodname">readonly</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">abstract</span> <span class="modifier">public</span> <span class="type">Yaf_Config_Abstract</span> <span class="methodname"><a href="yaf-config-abstract.set.php" class="methodname">set</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">abstract</span> <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><a href="yaf-config-abstract.toarray.php" class="methodname">toArray</a></span>
    ( <span class="methodparam">void</span>
   )</div>

   }</div>


  </div>

  

  <div class="section" id="yaf-config-abstract.props">
   <h2 class="title">Properties</h2>
   <dl>

    
     <dt id="yaf-config-abstract.props.config"><var class="varname"><var class="varname">_config</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-config-abstract.props.readonly"><var class="varname"><var class="varname">_readonly</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
   </dl>

  </div>



 </div>

 





























<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="yaf-config-abstract.get.php">Yaf_Config_Abstract::get</a> — Getter</li><li><a href="yaf-config-abstract.readonly.php">Yaf_Config_Abstract::readonly</a> — Find a config whether readonly</li><li><a href="yaf-config-abstract.set.php">Yaf_Config_Abstract::set</a> — Setter</li><li><a href="yaf-config-abstract.toarray.php">Yaf_Config_Abstract::toArray</a> — Cast to array</li></ul>
</div>
<?php manual_footer(); ?>