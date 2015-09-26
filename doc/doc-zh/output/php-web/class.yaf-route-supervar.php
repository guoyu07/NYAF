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
    0 => 'class.yaf-route-supervar.php',
    1 => 'Yaf_Route_Supervar',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'yaf-route-static.route.php',
    1 => 'Yaf_Route_Static::route',
  ),
  'next' => 
  array (
    0 => 'yaf-route-supervar.assemble.php',
    1 => 'Yaf_Route_Supervar::assemble',
  ),
  'alternatives' => 
  array (
  ),
  'extra_header_links' => 
  array (
    'rel' => 'alternate',
    'href' => '/manual/en/feeds/class.yaf-route-supervar.atom',
    'type' => 'application/atom+xml',
  ),
);
$setup["toc"] = $TOC;
$setup["parents"] = $PARENTS;
manual_setup($setup);

manual_header();
?>
<div id="class.yaf-route-supervar" class="reference">

 <h1 class="title">The Yaf_Route_Supervar class</h1>
 

 <div class="partintro"><p class="verinfo">(Yaf &gt;=1.0.0)</p>


  <div class="section" id="yaf-route-supervar.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">

   </p>
  </div>


  <div class="section" id="yaf-route-supervar.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <div class="ooclass"></div>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <strong class="classname">Yaf_Route_Supervar</strong>
     </span>
     
     <span class="oointerface">implements 
      <span class="interfacename"><a href="class.yaf-route-interface.php" class="interfacename">Yaf_Route_Interface</a></span>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-route-supervar.php#yaf-route-supervar.props.var-name">$<var class="varname">_var_name</var></a></var>
    ;</div>


    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="yaf-route-supervar.assemble.php" class="methodname">assemble</a></span>
    ( <span class="methodparam"><span class="type">array</span> <code class="parameter">$info</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$query</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span><span class="methodname"><a href="yaf-route-supervar.construct.php" class="methodname">__construct</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$supervar_name</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-route-supervar.route.php" class="methodname">route</a></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-request-abstract.php" class="type Yaf_Request_Abstract">Yaf_Request_Abstract</a></span> <code class="parameter">$request</code></span>
   )</div>

   }</div>


  </div>

  

  <div class="section" id="yaf-route-supervar.props">
   <h2 class="title">Properties</h2>
   <dl>

    
     <dt id="yaf-route-supervar.props.var-name"><var class="varname"><var class="varname">_var_name</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
   </dl>

  </div>



 </div>

 






















<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="yaf-route-supervar.assemble.php">Yaf_Route_Supervar::assemble</a> — Assemble a url</li><li><a href="yaf-route-supervar.construct.php">Yaf_Route_Supervar::__construct</a> — The __construct purpose</li><li><a href="yaf-route-supervar.route.php">Yaf_Route_Supervar::route</a> — The route purpose</li></ul>
</div>
<?php manual_footer(); ?>