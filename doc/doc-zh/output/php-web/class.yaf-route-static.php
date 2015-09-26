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
    0 => 'class.yaf-route-static.php',
    1 => 'Yaf_Route_Static',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'yaf-route-simple.route.php',
    1 => 'Yaf_Route_Simple::route',
  ),
  'next' => 
  array (
    0 => 'yaf-route-static.assemble.php',
    1 => 'Yaf_Route_Static::assemble',
  ),
  'alternatives' => 
  array (
  ),
  'extra_header_links' => 
  array (
    'rel' => 'alternate',
    'href' => '/manual/en/feeds/class.yaf-route-static.atom',
    'type' => 'application/atom+xml',
  ),
);
$setup["toc"] = $TOC;
$setup["parents"] = $PARENTS;
manual_setup($setup);

manual_header();
?>
<div id="class.yaf-route-static" class="reference">

 <h1 class="title">The Yaf_Route_Static class</h1>
 

 <div class="partintro"><p class="verinfo">(Yaf &gt;=1.0.0)</p>


  <div class="section" id="yaf-route-static.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
     Defaultly, <a href="class.yaf-router.php" class="classname">Yaf_Router</a> only have a
     <strong class="classname">Yaf_Route_Static</strong> as its default route.
   </p>
   <p class="para">
     And <strong class="classname">Yaf_Route_Static</strong> is designed to handle the
     80% requirement. 
   </p>
   <p class="para">
     please *NOTE* that it is unecessary to instance a <strong class="classname">Yaf_Route_Static</strong>, also 
     unecesary to add it into <a href="class.yaf-router.php" class="classname">Yaf_Router</a>&#039;s routes stack,
     since there is always be one in <a href="class.yaf-router.php" class="classname">Yaf_Router</a>&#039;s
     routes stack, and always be called at the last time.
   </p>
  </div>


  <div class="section" id="yaf-route-static.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <div class="ooclass"></div>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <strong class="classname">Yaf_Route_Static</strong>
     </span>
     
     <span class="oointerface">implements 
      <span class="interfacename"><a href="class.yaf-router.php" class="interfacename">Yaf_Router</a></span>
     </span>
     {</div>

    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="yaf-route-static.assemble.php" class="methodname">assemble</a></span>
    ( <span class="methodparam"><span class="type">array</span> <code class="parameter">$info</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$query</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-route-static.match.php" class="methodname">match</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$uri</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-route-static.route.php" class="methodname">route</a></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-request-abstract.php" class="type Yaf_Request_Abstract">Yaf_Request_Abstract</a></span> <code class="parameter">$request</code></span>
   )</div>

   }</div>


  </div>

 </div>

 






















<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="yaf-route-static.assemble.php">Yaf_Route_Static::assemble</a> — Assemble a url</li><li><a href="yaf-route-static.match.php">Yaf_Route_Static::match</a> — The match purpose</li><li><a href="yaf-route-static.route.php">Yaf_Route_Static::route</a> — Route a request</li></ul>
</div>
<?php manual_footer(); ?>