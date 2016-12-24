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
    0 => 'class.yaf-route-map.php',
    1 => 'Yaf_Route_Map',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'yaf-route-interface.route.php',
    1 => 'Yaf_Route_Interface::route',
  ),
  'next' => 
  array (
    0 => 'yaf-route-map.assemble.php',
    1 => 'Yaf_Route_Map::assemble',
  ),
  'alternatives' => 
  array (
  ),
  'extra_header_links' => 
  array (
    'rel' => 'alternate',
    'href' => '/manual/en/feeds/class.yaf-route-map.atom',
    'type' => 'application/atom+xml',
  ),
);
$setup["toc"] = $TOC;
$setup["parents"] = $PARENTS;
manual_setup($setup);

manual_header();
?>
<div id="class.yaf-route-map" class="reference">

 <h1 class="title">The Yaf_Route_Map class</h1>
 

 <div class="partintro"><p class="verinfo">(Yaf &gt;=1.0.0)</p>


  <div class="section" id="yaf-route-map.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
     <strong class="classname">Yaf_Route_Map</strong> is a built-in route, it simply
     convert a URI endpoint (that part of the URI which comes after the
     base URI: see <span class="methodname"><a href="yaf-request-abstract.setbaseuri.php" class="methodname">Yaf_Request_Abstract::setBaseUri()</a></span>)
     to a controller name or action name(depends on the paramter passed to
     <span class="methodname"><a href="yaf-route-map.construct.php" class="methodname">Yaf_Route_Map::__construct()</a></span>) in following rule:
     A =&gt; controller A.
     A/B/C =&gt; controller A_B_C.
     A/B/C/D/E =&gt; controller A_B_C_D_E.
    </p>

    <p class="para">
     If the second parameter of
     <span class="methodname"><a href="yaf-route-map.construct.php" class="methodname">Yaf_Route_Map::__construct()</a></span> is specificed, then
     only the part before delimeter of URI will used to routing, the part after
     it is used to routing request parameters (see the example section of
     <span class="methodname"><a href="yaf-route-map.construct.php" class="methodname">Yaf_Route_Map::__construct()</a></span>).
   </p>
  </div>


  <div class="section" id="yaf-route-map.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <div class="ooclass"></div>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <strong class="classname">Yaf_Route_Map</strong>
     </span>
     
     <span class="oointerface">implements 
      <span class="interfacename"><a href="class.yaf-route-interface.php" class="interfacename">Yaf_Route_Interface</a></span>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-route-map.php#yaf-route-map.props.ctl-router">$<var class="varname">_ctl_router</var></a></var>
    ;</div>

    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-route-map.php#yaf-route-map.props.delimeter">$<var class="varname">_delimeter</var></a></var>
    ;</div>


    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="yaf-route-map.assemble.php" class="methodname">assemble</a></span>
    ( <span class="methodparam"><span class="type">array</span> <code class="parameter">$info</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$query</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="yaf-route-map.construct.php" class="methodname">__construct</a></span>
    ([ <span class="methodparam"><span class="type">string</span> <code class="parameter">$controller_prefer</code><span class="initializer"> = false</span></span>
   [, <span class="methodparam"><span class="type">string</span> <code class="parameter">$delimiter</code><span class="initializer"> = &quot;&quot;</span></span>
  ]] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-route-map.route.php" class="methodname">route</a></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-request-abstract.php" class="type Yaf_Request_Abstract">Yaf_Request_Abstract</a></span> <code class="parameter">$request</code></span>
   )</div>

   }</div>


  </div>

  

  <div class="section" id="yaf-route-map.props">
   <h2 class="title">Properties</h2>
   <dl>

    
     <dt id="yaf-route-map.props.ctl-router"><var class="varname"><var class="varname">_ctl_router</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-route-map.props.delimeter"><var class="varname"><var class="varname">_delimeter</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
   </dl>

  </div>



 </div>

 






















<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="yaf-route-map.assemble.php">Yaf_Route_Map::assemble</a> — Assemble a url</li><li><a href="yaf-route-map.construct.php">Yaf_Route_Map::__construct</a> — The __construct purpose</li><li><a href="yaf-route-map.route.php">Yaf_Route_Map::route</a> — The route purpose</li></ul>
</div>
<?php manual_footer(); ?>