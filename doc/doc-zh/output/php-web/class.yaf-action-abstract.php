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
    0 => 'class.yaf-action-abstract.php',
    1 => 'Yaf_Action_Abstract',
  ),
  'up' => 
  array (
    0 => 'book.yaf.php',
    1 => 'Yaf',
  ),
  'prev' => 
  array (
    0 => 'yaf-controller-abstract.setviewpath.php',
    1 => 'Yaf_Controller_Abstract::setViewpath',
  ),
  'next' => 
  array (
    0 => 'yaf-action-abstract.execute.php',
    1 => 'Yaf_Action_Abstract::execute',
  ),
  'alternatives' => 
  array (
  ),
  'extra_header_links' => 
  array (
    'rel' => 'alternate',
    'href' => '/manual/en/feeds/class.yaf-action-abstract.atom',
    'type' => 'application/atom+xml',
  ),
);
$setup["toc"] = $TOC;
$setup["parents"] = $PARENTS;
manual_setup($setup);

manual_header();
?>
<div id="class.yaf-action-abstract" class="reference">

 <h1 class="title">The Yaf_Action_Abstract class</h1>
 

 <div class="partintro"><p class="verinfo">(Yaf &gt;=1.0.0)</p>


  <div class="section" id="yaf-action-abstract.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    A action can be defined in a separate file in Yaf(see
    <a href="class.yaf-controller-abstract.php" class="classname">Yaf_Controller_Abstract</a>). that is a action method
    can also be a <strong class="classname">Yaf_Action_Abstract</strong> class.
   </p>
   <p class="para">
    Since there should be a entry point which can be called by Yaf (as of PHP 5.3, 
    there is a new magic method __invoke, but Yaf is not only works with PHP 5.3+, 
    Yaf choose another magic method execute), you must implement the abstract method
    <span class="methodname"><a href="yaf-action-abstract.execute.php" class="methodname">Yaf_Action_Abstract::execute()</a></span> in your custom
    action class.
   </p>
  </div>


  <div class="section" id="yaf-action-abstract.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <div class="ooclass"></div>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <strong class="classname">Yaf_Action_Abstract</strong>
     </span>
     
     <span class="ooclass">
      <span class="modifier">extends</span>
      <a href="class.yaf-controller-abstract.php" class="classname">Yaf_Controller_Abstract</a>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>
    <div class="fieldsynopsis">
     <span class="modifier">protected</span>
      <var class="varname"><a href="class.yaf-action-abstract.php#yaf-action-abstract.props.controller">$<var class="varname">_controller</var></a></var>
    ;</div>


    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">abstract</span> <span class="modifier">public</span><span class="type">mixed</span> <span class="methodname"><a href="yaf-action-abstract.execute.php" class="methodname">execute</a></span>
    ([ <span class="methodparam"><span class="type"><a href="language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$arg</code></span>
   [, <span class="methodparam"><span class="type"><a href="language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <code class="parameter">$...</code></span>
  ]] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span><span class="type">Yaf_Controller_Abstract</span> <span class="methodname"><a href="yaf-action-abstract.getcontroller.php" class="methodname">getController</a></span>
    ( <span class="methodparam">void</span>
   )</div>

    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Inherited methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">final</span> <span class="modifier">private</span> <span class="type">void</span> <span class="methodname"><a href="yaf-controller-abstract.clone.php" class="methodname">Yaf_Controller_Abstract::__clone</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">final</span> <span class="modifier">private</span> <span class="methodname"><a href="yaf-controller-abstract.construct.php" class="methodname">Yaf_Controller_Abstract::__construct</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">protected</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-controller-abstract.display.php" class="methodname">Yaf_Controller_Abstract::display</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$tpl</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$parameters</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-controller-abstract.forward.php" class="methodname">Yaf_Controller_Abstract::forward</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$action</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$paramters</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-controller-abstract.getinvokearg.php" class="methodname">Yaf_Controller_Abstract::getInvokeArg</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$name</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-controller-abstract.getinvokeargs.php" class="methodname">Yaf_Controller_Abstract::getInvokeArgs</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">string</span> <span class="methodname"><a href="yaf-controller-abstract.getmodulename.php" class="methodname">Yaf_Controller_Abstract::getModuleName</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_Request_Abstract</span> <span class="methodname"><a href="yaf-controller-abstract.getrequest.php" class="methodname">Yaf_Controller_Abstract::getRequest</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_Response_Abstract</span> <span class="methodname"><a href="yaf-controller-abstract.getresponse.php" class="methodname">Yaf_Controller_Abstract::getResponse</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">Yaf_View_Interface</span> <span class="methodname"><a href="yaf-controller-abstract.getview.php" class="methodname">Yaf_Controller_Abstract::getView</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-controller-abstract.getviewpath.php" class="methodname">Yaf_Controller_Abstract::getViewpath</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-controller-abstract.init.php" class="methodname">Yaf_Controller_Abstract::init</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-controller-abstract.initview.php" class="methodname">Yaf_Controller_Abstract::initView</a></span>
    ([ <span class="methodparam"><span class="type">array</span> <code class="parameter">$options</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">bool</span> <span class="methodname"><a href="yaf-controller-abstract.redirect.php" class="methodname">Yaf_Controller_Abstract::redirect</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$url</code></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">protected</span> <span class="type">string</span> <span class="methodname"><a href="yaf-controller-abstract.render.php" class="methodname">Yaf_Controller_Abstract::render</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$tpl</code></span>
   [, <span class="methodparam"><span class="type">array</span> <code class="parameter">$parameters</code></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="type">void</span> <span class="methodname"><a href="yaf-controller-abstract.setviewpath.php" class="methodname">Yaf_Controller_Abstract::setViewpath</a></span>
    ( <span class="methodparam"><span class="type">string</span> <code class="parameter">$view_directory</code></span>
   )</div>


   }</div>


  </div>

  

  <div class="section" id="yaf-action-abstract.props">
   <h2 class="title">Properties</h2>
   <dl>

    
     <dt id="yaf-action-abstract.props.module"><var class="varname"><var class="varname">_module</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-action-abstract.props.name"><var class="varname"><var class="varname">_name</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-action-abstract.props.request"><var class="varname"><var class="varname">_request</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-action-abstract.props.response"><var class="varname"><var class="varname">_response</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-action-abstract.props.invoke-args"><var class="varname"><var class="varname">_invoke_args</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-action-abstract.props.view"><var class="varname"><var class="varname">_view</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
    
     <dt id="yaf-action-abstract.props.controller"><var class="varname"><var class="varname">_controller</var></var></dt>

     <dd>

      <p class="para"/>
     </dd>

    
   </dl>

  </div>



 </div>

 















<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="yaf-action-abstract.execute.php">Yaf_Action_Abstract::execute</a> — Action entry point</li><li><a href="yaf-action-abstract.getcontroller.php">Yaf_Action_Abstract::getController</a> — Retrieve controller object</li></ul>
</div>
<?php manual_footer(); ?>