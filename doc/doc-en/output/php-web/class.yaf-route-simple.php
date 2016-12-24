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
    0 => 'class.yaf-route-simple.php',
    1 => 'Yaf_Route_Simple',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'yaf-router.route.php',
    1 => 'Yaf_Router::route',
  ),
  'next' => 
  array (
    0 => 'yaf-route-simple.assemble.php',
    1 => 'Yaf_Route_Simple::assemble',
  ),
  'alternatives' => 
  array (
  ),
  'extra_header_links' => 
  array (
    'rel' => 'alternate',
    'href' => '/manual/en/feeds/class.yaf-route-simple.atom',
    'type' => 'application/atom+xml',
  ),
);
$setup["toc"] = $TOC;
$setup["parents"] = $PARENTS;
manual_setup($setup);

manual_header();
?>
<div id="class.yaf-route-simple" class="reference">

 <h1 class="title">The Yaf_Route_Simple class</h1>
 

 <div class="partintro"><p class="verinfo">(Yaf &gt;=1.0.0)</p>


  <div class="section" id="yaf-route-simple.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    <strong class="classname">Yaf_Route_Simple</strong> will match the query string, and
    find the route info.
   </p>
   <p class="para">
    all you need to do is tell <strong class="classname">Yaf_Route_Simple</strong> what key in the $_GET is
     module, what key is controller, and what key is action.
   </p>
   <p class="para">
    <span class="methodname"><a href="yaf-route-simple.route.php" class="methodname">Yaf_Route_Simple::route()</a></span> will always return
    <strong><code>TRUE</code></strong>,
    so it is important put <strong class="classname">Yaf_Route_Simple</strong> in the front of the Route stack,
    otherwise all the other routes will not be called.
   </p>
  </div>


  <div class="section" id="yaf-route-simple.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <div class="ooclass"></div>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <strong class="classname">Yaf_Route_Simple</strong>
     </span>
     
     <span class="oointerface">implements 
      <span class="interfacename"><a href="class.yaf-route-interface.php" class="interfacename">Yaf_Route_Interface</a></span>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-route-simple.php#yaf-route-simple.props.controller">$<var class="varname">controller</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-route-simple.php#yaf-route-simple.props.module">$<var class="varname">module</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-route-simple.php#yaf-route-simple.props.action">$<var class="varname">action</var></a></var>
    ;</div>


    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="yaf-route-simple.assemble.php" class="methodname">assemble</a></span>
    ( <span class="methodparam"><span class="type">array</span> <code class="parameter">$info</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$query</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span><span class="methodname"><a href="yaf-route-simple.construct.php" class="methodname">__construct</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$module_name</code></span>
   , <span class="methodparam"><span class="type">string</span> <code class="parameter">$controller_name</code></span>
   , <span class="methodparam"><span class="type">string</span> <code class="parameter">$action_name</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-route-simple.route.php" class="methodname">route</a></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-request-abstract.php" class="type Yaf_Request_Abstract">Yaf_Request_Abstract</a></span> <code class="parameter">$request</code></span>
   )</div>

   }</div>


  </div>

  

  <div class="section" id="yaf-route-simple.props">
   <h2 class="title">Properties</h2>
   <dl>

    
     <dt id="yaf-route-simple.props.controller"><var class="varname"><var class="varname">controller</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-route-simple.props.module"><var class="varname"><var class="varname">module</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-route-simple.props.action"><var class="varname"><var class="varname">action</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
   </dl>

  </div>



 </div>

 






















<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="yaf-route-simple.assemble.php">Yaf_Route_Simple::assemble</a> — Assemble a url</li><li><a href="yaf-route-simple.construct.php">Yaf_Route_Simple::__construct</a> — Yaf_Route_Simple constructor</li><li><a href="yaf-route-simple.route.php">Yaf_Route_Simple::route</a> — Route a request</li></ul>
</div>
<?php manual_footer(); ?>