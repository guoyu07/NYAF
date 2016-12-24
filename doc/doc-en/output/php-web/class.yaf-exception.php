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
    0 => 'class.yaf-exception.php',
    1 => 'Yaf_Exception',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'yaf-session.wakeup.php',
    1 => 'Yaf_Session::__wakeup',
  ),
  'next' => 
  array (
    0 => 'yaf-exception.construct.php',
    1 => 'Yaf_Exception::__construct',
  ),
  'alternatives' => 
  array (
  ),
  'extra_header_links' => 
  array (
    'rel' => 'alternate',
    'href' => '/manual/en/feeds/class.yaf-exception.atom',
    'type' => 'application/atom+xml',
  ),
);
$setup["toc"] = $TOC;
$setup["parents"] = $PARENTS;
manual_setup($setup);

manual_header();
?>
<div id="class.yaf-exception" class="reference">

 <h1 class="title">The Yaf_Exception class</h1>
 

 <div class="partintro"><p class="verinfo">(Yaf &gt;=1.0.0)</p>


  <div class="section" id="yaf-exception.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">

   </p>
  </div>


  <div class="section" id="yaf-exception.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <div class="ooclass"></div>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <strong class="classname">Yaf_Exception</strong>
     </span>
     
     <span class="ooclass">
      <span class="modifier">extends</span>
      <strong class="classname">Exception</strong>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
     <span class="type">string</span>
      <var class="varname"><a href=".php#exception.props.message">$<var class="varname">message</var></a></var>
    ;</div>
<div class="fieldsynopsis">
     <span class="modifier">protected</span>
     <span class="type">int</span>
      <var class="varname"><a href=".php#exception.props.code">$<var class="varname">code</var></a></var>
    ;</div>
<div class="fieldsynopsis">
     <span class="modifier">protected</span>
     <span class="type">string</span>
      <var class="varname"><a href=".php#exception.props.file">$<var class="varname">file</var></a></var>
    ;</div>
<div class="fieldsynopsis">
     <span class="modifier">protected</span>
     <span class="type">int</span>
      <var class="varname"><a href=".php#exception.props.line">$<var class="varname">line</var></a></var>
    ;</div>

    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="yaf-exception.construct.php" class="methodname">__construct</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-exception.getprevious.php" class="methodname">getPrevious</a></span>
    ( <span class="methodparam">void</span>
   )</div>

    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><strong>Exception::getMessage</strong></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">Exception</span> <span class="methodname"><strong>Exception::getPrevious</strong></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">mixed</span> <span class="methodname"><strong>Exception::getCode</strong></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><strong>Exception::getFile</strong></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">int</span> <span class="methodname"><strong>Exception::getLine</strong></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">array</span> <span class="methodname"><strong>Exception::getTrace</strong></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><strong>Exception::getTraceAsString</strong></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">string</span>  <span class="methodname"><strong>Exception::__toString</strong></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">final</span> <span class="modifier">private</span> <span class="type">void</span> <span class="methodname"><strong>Exception::__clone</strong></span>
    ( <span class="methodparam">void</span>
   )</div>


   }</div>


  </div>

  
 </div>

 















<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="yaf-exception.construct.php">Yaf_Exception::__construct</a> — The __construct purpose</li><li><a href="yaf-exception.getprevious.php">Yaf_Exception::getPrevious</a> — The getPrevious purpose</li></ul>
</div>
<?php manual_footer(); ?>