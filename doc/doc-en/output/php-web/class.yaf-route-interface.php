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
    0 => 'class.yaf-route-interface.php',
    1 => 'Yaf_Route_Interface',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'yaf-response-abstract.tostring.php',
    1 => 'Yaf_Response_Abstract::__toString',
  ),
  'next' => 
  array (
    0 => 'yaf-route-interface.assemble.php',
    1 => 'Yaf_Route_Interface::assemble',
  ),
  'alternatives' => 
  array (
  ),
  'extra_header_links' => 
  array (
    'rel' => 'alternate',
    'href' => '/manual/en/feeds/class.yaf-route-interface.atom',
    'type' => 'application/atom+xml',
  ),
);
$setup["toc"] = $TOC;
$setup["parents"] = $PARENTS;
manual_setup($setup);

manual_header();
?>
<div id="class.yaf-route-interface" class="reference">

 <h1 class="title">The Yaf_Route_Interface class</h1>
 

 <div class="partintro"><p class="verinfo">(Yaf &gt;=1.0.0)</p>


  <div class="section" id="yaf-route-interface.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    <strong class="classname">Yaf_Route_Interface</strong> used for developer defined
    their custom route.
   </p>
  </div>


  <div class="section" id="yaf-route-interface.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <div class="ooclass"></div>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <strong class="classname">Yaf_Route_Interface</strong>
     </span>
     {</div>

    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">abstract</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="yaf-route-interface.assemble.php" class="methodname">assemble</a></span>
    ( <span class="methodparam"><span class="type">array</span> <code class="parameter">$info</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$query</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">abstract</span> <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-route-interface.route.php" class="methodname">route</a></span>
    ( <span class="methodparam"><span class="type"><a href="class.yaf-request-abstract.php" class="type Yaf_Request_Abstract">Yaf_Request_Abstract</a></span> <code class="parameter">$request</code></span>
   )</div>

   }</div>


  </div>

 </div>

 















<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="yaf-route-interface.assemble.php">Yaf_Route_Interface::assemble</a> — assemble a request</li><li><a href="yaf-route-interface.route.php">Yaf_Route_Interface::route</a> — route a request</li></ul>
</div>
<?php manual_footer(); ?>