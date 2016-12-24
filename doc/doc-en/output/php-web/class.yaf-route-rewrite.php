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
    0 => 'class.yaf-route-rewrite.php',
    1 => 'Yaf_Route_Rewrite',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'yaf-route-regex.route.php',
    1 => 'Yaf_Route_Regex::route',
  ),
  'next' => 
  array (
    0 => 'yaf-route-rewrite.assemble.php',
    1 => 'Yaf_Route_Rewrite::assemble',
  ),
  'alternatives' => 
  array (
  ),
  'extra_header_links' => 
  array (
    'rel' => 'alternate',
    'href' => '/manual/en/feeds/class.yaf-route-rewrite.atom',
    'type' => 'application/atom+xml',
  ),
);
$setup["toc"] = $TOC;
$setup["parents"] = $PARENTS;
manual_setup($setup);

manual_header();
?>
<div id="class.yaf-route-rewrite" class="reference">

 <h1 class="title">The Yaf_Route_Rewrite class</h1>
 

 <div class="partintro"><p class="verinfo">(Yaf &gt;=1.0.0)</p>


  <div class="section" id="yaf-route-rewrite.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
     For usage, please see the example section of
     <span class="methodname"><a href="yaf-route-rewrite.construct.php" class="methodname">Yaf_Route_Rewrite::__construct()</a></span>
   </p>
  </div>


  <div class="section" id="yaf-route-rewrite.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <div class="ooclass"></div>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <strong class="classname">Yaf_Route_Rewrite</strong>
     </span>
     
     <span class="ooclass">
      <span class="modifier">extends</span>
      <a href="class.yaf-route-interface.php" class="classname">Yaf_Route_Interface</a>
     </span>
     
     <span class="oointerface">implements 
      <span class="interfacename"><a href="class.yaf-route-interface.php" class="interfacename">Yaf_Route_Interface</a></span>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-route-rewrite.php#yaf-route-rewrite.props.route">$<var class="varname">_route</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-route-rewrite.php#yaf-route-rewrite.props.default">$<var class="varname">_default</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-route-rewrite.php#yaf-route-rewrite.props.verify">$<var class="varname">_verify</var></a></var>
    ;</div>


    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="yaf-route-rewrite.assemble.php" class="methodname">assemble</a></span>
    ( <span class="methodparam"><span class="type">array</span> <code class="parameter">$info</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$query</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span><span class="methodname"><a href="yaf-route-rewrite.construct.php" class="methodname">__construct</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$match</code></span>
   , <span class="methodparam"><span class="type">array</span> <code class="parameter">$route</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$verify</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-route-rewrite.route.php" class="methodname">route</a></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-request-abstract.php" class="type Yaf_Request_Abstract">Yaf_Request_Abstract</a></span> <code class="parameter">$request</code></span>
   )</div>

    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">abstract</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="yaf-route-interface.assemble.php" class="methodname">Yaf_Route_Interface::assemble</a></span>
    ( <span class="methodparam"><span class="type">array</span> <code class="parameter">$info</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$query</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">abstract</span> <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-route-interface.route.php" class="methodname">Yaf_Route_Interface::route</a></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-request-abstract.php" class="type Yaf_Request_Abstract">Yaf_Request_Abstract</a></span> <code class="parameter">$request</code></span>
   )</div>


   }</div>


  </div>

  

  <div class="section" id="yaf-route-rewrite.props">
   <h2 class="title">Properties</h2>
   <dl>

    
     <dt id="yaf-route-rewrite.props.route"><var class="varname"><var class="varname">_route</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-route-rewrite.props.default"><var class="varname"><var class="varname">_default</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-route-rewrite.props.verify"><var class="varname"><var class="varname">_verify</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
   </dl>

  </div>



 </div>

 






















<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="yaf-route-rewrite.assemble.php">Yaf_Route_Rewrite::assemble</a> — Assemble a url</li><li><a href="yaf-route-rewrite.construct.php">Yaf_Route_Rewrite::__construct</a> — Yaf_Route_Rewrite constructor</li><li><a href="yaf-route-rewrite.route.php">Yaf_Route_Rewrite::route</a> — The route purpose</li></ul>
</div>
<?php manual_footer(); ?>