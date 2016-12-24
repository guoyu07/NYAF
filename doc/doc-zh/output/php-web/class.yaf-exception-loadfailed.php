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
    0 => 'class.yaf-exception-loadfailed.php',
    1 => 'Yaf_Exception_LoadFailed',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'class.yaf-exception-routerfailed.php',
    1 => 'Yaf_Exception_RouterFailed',
  ),
  'next' => 
  array (
    0 => 'class.yaf-exception-loadfailed-module.php',
    1 => 'Yaf_Exception_LoadFailed_Module',
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
<div id="class.yaf-exception-loadfailed" class="reference">

 <h1 class="title">The Yaf_Exception_LoadFailed class</h1>
 

 <div class="partintro"><p class="verinfo">(Yaf &gt;=1.0.0)</p>


  <div class="section" id="yaf-exception-loadfailed.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">

   </p>
  </div>


  <div class="section" id="yaf-exception-loadfailed.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <div class="ooclass"></div>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <strong class="classname">Yaf_Exception_LoadFailed</strong>
     </span>
     
     <span class="ooclass">
      <span class="modifier">extends</span>
      <a href="class.yaf-exception.php" class="classname">Yaf_Exception</a>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="yaf-exception.construct.php" class="methodname">Yaf_Exception::__construct</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-exception.getprevious.php" class="methodname">Yaf_Exception::getPrevious</a></span>
    ( <span class="methodparam">void</span>
   )</div>


   }</div>


  </div>

  




 </div>

</div>
<?php manual_footer(); ?>